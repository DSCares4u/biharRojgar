<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Validator;

class JobController extends Controller
{
    public function index()
    {
        $job = Job::orderBy('created_at', 'desc')->get();
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

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            'dob' => 'required',
            'mother' => 'required|string|min:3',
            'father' => 'required|string|min:3',
            'gender' => 'required',
            'mobile' => 'required',
            'marital' => 'required',
            'email' => 'required|email|min:3',
            'id_mark1' => 'required|string|min:3',
            'id_mark2' => 'required|string|min:3',
            'lang_of_exam' => 'required',
            'religion' => 'required|string|min:3',
            'community' => 'required',
            'village' => 'required|string|min:3',
            'landmark' => 'required|string|min:3',
            'city' => 'required|string|min:3',
            'state' => 'required|string|min:3',
            'pincode' => 'required',
            'qualification' => 'required|string|min:3',
            'q_state' => 'required|string|min:3',
            'q_district' => 'required|string|min:3',
            'board' => 'required|string|min:3',
            'roll_no' => 'required',
            'date_of_passing' => 'required',
            'experience' => 'required|string',
            'skills' => 'required|string',
            'salary_exept' => 'required',
            'id_proof_type' => 'required',            
            'photo' => 'required',            
            'signature' => 'required',            
            'id_proof' => 'required',            
            'quali_certificate' => 'required',            
        ]);

        // image & pdf Work 

        $photo = time() . "." . $request->photo->extension();        //upload on public/photo/image/filename
        $request->image->move(public_path("image/photo"), $photo);

        $signature = time() . "." . $request->image->extension();        //upload on public/photo/image/filename
        $request->image->move(public_path("image/signature"), $signature);

        $id_proof = time() . "." . $request->image->extension();        //upload on public/photo/image/filename
        $request->image->move(public_path("image/id_proof"), $id_proof);

        $quali_certificate = time() . "." . $request->image->extension();        //upload on public/photo/image/filename
        $request->image->move(public_path("image/quali_certificate"), $quali_certificate);

        $other_certificate = time() . "." . $request->image->extension();        //upload on public/photo/image/filename
        $request->image->move(public_path("image/other_certificate"), $other_certificate);


        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->messages()
            ], 422);
        } else {

            $job = Job::create([
                'name' => $request->name,
                'dob' => $request->dob,
                'mother' => $request->mother,
                'father' => $request->father,
                'gender' => $request->gender,
                'mobile' => $request->mobile,
                'marital' => $request->marital,
                'email' => $request->email,
                'id_mark1' => $request->id_mark1,
                'id_mark2' => $request->id_mark2,
                'lang_of_exam' => $request->lang_of_exam,
                'religion' => $request->religion,
                'community' => $request->community,
                'village' => $request->village,
                'landmark' => $request->landmark,
                'city' => $request->city,
                'state' => $request->state,
                'pincode' => $request->pincode,
                'qualification' => $request->qualification,
                'q_state' => $request->q_state,
                'q_district' => $request->q_district,
                'board' => $request->board,
                'roll_no' => $request->roll_no,
                'date_of_passing' => $request->date_of_passing,
                'experience' => $request->experience,
                'skills' => $request->skills,
                'salary_exept' => $request->salary_exept,
                'id_proof_type' => $request->id_proof_type,
                'photo'=>$photo,
                'signature'=>$signature,
                'id_proof'=>$id_proof,
                'quali_certificate'=>$quali_certificate,
                'other_certificate'=>$other_certificate                              
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

    public function show($id)
    {
        $job = Job::find($id);
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

    public function update(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->messages()
            ], 422);
        } else {
            $job = Job::find($id);
            if ($job) {
                $job->update([
                    'name' => $request->name,                    
                ]);

                return response()->json([
                    'status' => 200,
                    'message' => "Job Updated Successfully"
                ], 200);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => "No Job Found"
                ], 500);
            }
        }
    }

    public function destroy($id)
    {
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
}
