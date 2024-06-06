<?php

namespace App\Http\Controllers;

use App\Models\SarkariJobApply;
use App\Models\Candidate;
use App\Models\Address;
use App\Models\Document;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class SarkariJobApplyController extends Controller
{
    public function index(){
        $job = SarkariJobApply::orderBy('created_at', 'desc')->get();
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

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'job_id' => 'required'                
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
            $existingApplication = SarkariJobApply::where('user_id', $request->user_id)
                                                 ->where('job_id', $request->job_id)
                                                 ->first();
            if ($existingApplication) {
                return response()->json([
                    'status' => 409,
                    'message' => "You have already applied for this job."
                ], 409);
            }
    
            // Create the new job application
            $job = SarkariJobApply::create([
                'payment_mode' => $request->payment_mode,
                'user_id' => $request->user_id,
                'job_id' => $request->job_id,
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

    public function show($id){
        $job = SarkariJobApply::find($id);
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
    
    // public function update(Request $request, int $id){
    //     $validator = Validator::make($request->all(), [
    //         'user_id' => 'required',                 
    // ]);

    // if ($validator->fails()) {
    //     return response()->json([
    //         'status' => 422,
    //         'error' => $validator->messages()
    //     ], 422);
    // } else {
    //     if ($id) {
    //         // Check if job exists
    //         $job = SarkariJobApply::find($id);
    //         if ($job) {
    //             // Update existing job
    //             $job->update([
    //                 'user_id' => $request->user_id,
    //                 'payment_mode' => $request->payment_mode,                               
    //             ]);

    //             return response()->json([
    //                 'status' => 200,
    //                 'message' => "Job Updated Successfully"
    //             ], 200);
    //         }
    //     }

    //     // Create new job
    //     $newJob = SarkariJobApply::create([
    //         'user_id' => $request->user_id,
    //         'payment_mode' => $request->payment_mode,                               
    //     ]);

    //     return response()->json([
    //         'status' => 200,
    //         'message' => "Job Created Successfully",
    //         'job' => $newJob
    //     ], 200);
    // }
    // }

    public function destroy($id){
        $job  = SarkariJobApply::find($id);
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
}