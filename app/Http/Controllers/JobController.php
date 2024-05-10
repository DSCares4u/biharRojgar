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
            'id_mark' => 'required|string|min:3',
            'preferred_lang' => 'required',
            'religion' => 'required|string|min:3',
            'community' => 'required',
            'village' => 'required|string|min:3',
            'landmark' => 'required|string|min:3',
            'city' => 'required|string|min:3',
            'state' => 'required|string|min:3',
            'pincode' => 'required',
            'qualification' => 'required|string|min:3',
            'q_state' => 'required|string|min:3',
            'board' => 'required|string|min:3',
            'passing_year' => 'required',
            'experience' => 'required|string',
            'skills' => 'required|string',
            'id_proof_type' => 'required',            
            // 'image' => 'required|string',            
            // 'signature' => 'required',            
            // 'id_proof' => 'required',            
            // 'quali_certificate' => 'required',            
        ]);

        // image & pdf Work  

        $randomNumber = mt_rand(1000,9999); // Generate a random number

        $photo = "DO". time() . $randomNumber . "." . $request->photo->extension();        //upload on public/photo/image/filename
        $request->photo->move(public_path("image/photo"), $photo);

        $signature = "SI". time() . $randomNumber . "." . $request->signature->extension();        //upload on public/photo/image/filename
        $request->signature->move(public_path("image/signature"), $signature);

        $id_proof = "ID". time() . $randomNumber . "." . $request->id_proof->extension();        //upload on public/photo/image/filename
        $request->id_proof->move(public_path("image/id_proof"), $id_proof);

        $quali_certificate = "QU". time() . $randomNumber . "." . $request->quali_certificate->extension();        //upload on public/photo/image/filename
        $request->quali_certificate->move(public_path("image/quali_certificate"), $quali_certificate);

        $other_certificate = "OT". time() . $randomNumber . "." . $request->other_certificate->extension();        //upload on public/photo/image/filename
        $request->other_certificate->move(public_path("image/other_certificate"), $other_certificate);

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
                'id_mark' => $request->id_mark,
                'preferred_lang' => $request->preferred_lang,
                'religion' => $request->religion,
                'community' => $request->community,
                'village' => $request->village,
                'landmark' => $request->landmark,
                'city' => $request->city,
                'state' => $request->state,
                'pincode' => $request->pincode,
                'qualification' => $request->qualification,
                'q_state' => $request->q_state,
                'board' => $request->board,
                'passing_year' => $request->passing_year,
                'experience' => $request->experience,
                'skills' => $request->skills,
                'id_proof_type' => $request->id_proof_type,
                'photo' => $photo,
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