<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Candidate;
use App\Models\Address;
use App\Models\Document;
use App\Models\ManualJob;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index(){
        $job = Job::with('user','role','candidate','address','document')->orderBy('created_at', 'desc')->get();
        if ($job->count() > 0) {
            return response()->json([
                'status' => 200,
                'data' => $job
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'data' => "No Records found"
            ], 404);
        }
    }

    public function checkApplicationStatus($jobId, Request $request)
    {
        $userId = $request->user()->id; // Get the authenticated user's ID

        $existingApplication = Job::where('user_id', $userId)
            ->where('role_id', $jobId)
            ->first();

        return response()->json([
            'already_applied' => $existingApplication ? true : false
        ]);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'role_id' =>'required'                
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->messages()
            ], 422);
        } else {

              // Check if the user has a candidate profile
              $candidate = Candidate::where('user_id', $request->user_id)->first();
              if (!$candidate) {
                  return response()->json([
                      'status' => 403,
                      'message' => "You need to create a candidate profile before applying."
                  ], 403);
              }
  
              $address = Address::where('user_id', $request->user_id)->first();
              if (!$address) {
                  return response()->json([
                      'status' => 403,
                      'message' => "You need to add Qualification details  before applying."
                  ], 403);
              }
      
              // Check if the user has uploaded the required documents
              $documents = Document::where('user_id', $request->user_id)->get();
              if ($documents->isEmpty()) {
                  return response()->json([
                      'status' => 403,
                      'message' => "You need to upload the required documents before applying."
                  ], 403);
              }
            // Check if the user has already applied for the job
            $existingApplication = Job::where('user_id', $request->user_id)
                                                 ->where('role_id', $request->role_id)
                                                 ->first();
            if ($existingApplication) {
                return response()->json([
                    'status' => 409,
                    'message' => "You have already applied for this job."
                ], 409);
            }
    
            // Create the new job application
            $job = Job::create([
                'payment_mode' => $request->payment_mode,          
                'user_id' => $request->user_id,                     
                'role_id' => $request->role_id,                     
            ]);
    
            if ($job) {
                return response()->json([
                    'status' => 200,
                    'message' => "We Will Connect You Soon"
                ], 200);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => "Unable to add your Request"
                ], 500);
            }
        }
    }

    public function manualJobIndex(){
        $job = ManualJob::orderBy('created_at', 'desc')->get();
        if ($job->count() > 0) {
            return response()->json([
                'status' => 200,
                'data' => $job
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'data' => "No Records found"
            ], 404);
        }
    }

    public function manualStore(Request $request){
        $validator = Validator::make($request->all(), [
            'form' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',  // Add validation for photo
            'name' => 'required|string|min:3',
            'mobile' => 'required|digits:10|regex:/^[0-9]{10}$/',
            'id_proof' => 'required|image|mimes:jpeg,png,jpg,gif,pdf,svg|max:10240',  // Add validation for photo
            'certificate' => 'required|mimes:jpeg,png,jpg,gif,pdf,svg|max:10240',  // Add validation for photo
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',  // Add validation for photo
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }

            // Image & document Work

        if ($request->hasFile('form')) {
            $form = time() .  "." . $request->form->extension();        //upload on public/photo/image/filename
            $request->form->move(public_path("image/manualJob/form"), $form);

            } else {
            return response()->json([
                'status' => 422,
                'errors' => ['form' => 'Form is required.']
            ], 422);
        }
        if ($request->hasFile('photo')) {
            $photo = "IMG".time() .  "." . $request->photo->extension();        //upload on public/photo/image/filename
            $request->photo->move(public_path("image/manualJob/photo"), $photo);

            } else {
            return response()->json([
                'status' => 422,
                'errors' => ['photo' => 'Photo is required.']
            ], 422);
        }
        if ($request->hasFile('id_proof')) {
            $id_proof = "ID".time() .  "." . $request->id_proof->extension();        //upload on public/photo/image/filename
            $request->id_proof->move(public_path("image/manualJob/id_proof"), $id_proof);

            } else {
            return response()->json([
                'status' => 422,
                'errors' => ['id_proof' => 'Id Proof is required.']
            ], 422);
        }
        if ($request->hasFile('certificate')) {
            $certificate = "DOC".time() .  "." . $request->certificate->extension();        //upload on public/photo/image/filename
            $request->certificate->move(public_path("image/manualJob/certificate"), $certificate);

            } else {
            return response()->json([
                'status' => 422,
                'errors' => ['certificate' => 'Certificate is required.']
            ], 422);
        }
            $job = ManualJob::create([
                'form' => $form,          
                'name' => $request->name,
                'mobile' => $request->mobile,         
                'id_proof' => $id_proof,          
                'certificate' => $certificate,          
                'photo' => $photo,          
            ]);
    
            if ($job) {
                return response()->json([
                    'status' => 200,
                    'message' => "We Will Connect You Soon"
                ], 200);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => "Unable to add your Request"
                ], 500);
            }
    }

    public function manualJobshow($id){
        $job = ManualJob::find($id);
        if($job){
            return response()->json([
                'status' => 200,
                'data' => $job
            ], 200);
        }
        else{
            return response()->json([
                'status' => 404,
                'message' => "No call Found"
            ], 404);
        }
    }

    public function show($id){
        $job = Job::with('user', 'role','candidate','address','document')->find($id);
        if($job){
            return response()->json([
                'status' => 200,
                'data' => $job
            ], 200);
        }
        else{
            return response()->json([
                'status' => 404,
                'message' => "No call Found"
            ], 404);
        }
    }
    
    public function update(Request $request, int $id){
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'role_id' =>'required'    
        ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 422,
            'error' => $validator->messages()
        ], 422);
    } else {
        if ($id) {
            // Check if job exists
            $job = Job::find($id);
            if ($job) {
                // Update existing job
                $job->update([
                    'payment_mode' => $request->payment_mode,          
                    'user_id' => $request->user_id,                     
                    'role_id' => $request->role_id,                               
                ]);

                return response()->json([
                    'status' => 200,
                    'message' => "Job Updated Successfully"
                ], 200);
            }
        }

        // Create new job
        $newJob = Job::create([
            'user_id' => $request->user_id,
            'payment_mode' => $request->payment_mode,                               
        ]);

        return response()->json([
            'status' => 200,
            'message' => "Job Created Successfully",
            'job' => $newJob
        ], 200);
    }
    }

    public function destroy($id){
        $job  = Job::find($id);
        if($job){
            $job->delete();
            return response()->json([
                'status' => 200,
                'message' => "Job Deleted"
            ], 200);
        }
        else{
            return response()->json([
                'status' => 500,
                'message' => "No Job Found"
            ], 500);
        }       
    }

    public function manualJobDelete($id){
        $job  = ManualJob::find($id);
        if($job){
            $job->delete();
            return response()->json([
                'status' => 200,
                'message' => "Job Deleted"
            ], 200);
        }
        else{
            return response()->json([
                'status' => 500,
                'message' => "No Job Found"
            ], 500);
        }       
    }

    public function updateStatus(Request $request, int $id){
        $job = ManualJob::find($id);
            if($job){
            $data = $job->update([
                'status' => $request->status,   
            ]);
            // dd($data);
            if($data){
                return response()->json([
                    'status' => 200,
                    'message' => "Updated Successfully"
                ], 200);
            }
        }
        return response()->json([
            'status' => 400,
            'message' => "Error Updating Job Status"
        ], 400);
    }
}