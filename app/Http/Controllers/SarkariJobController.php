<?php

namespace App\Http\Controllers;

use App\Models\SarkariJob;
use Illuminate\Http\Request;
use Validator;


class SarkariJobController extends Controller
{
    public function index()
    {
        $job = SarkariJob::orderBy('created_at', 'desc')->get();
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
            'role' => 'required|string',
            'no_of_post' => 'required',
            'min_age' => 'required',
            'max_age' => 'required',
            'qualification' => 'required',
            'skills' => 'required',
            'fees' => 'required',
            'opening_date' => 'required',
            'closing_date' => 'required',              
        ]);
        $logo = time() .  "." . $request->logo->extension();        //upload on public/photo/image/filename
        $request->logo->move(public_path("image/sarkari/logo"), $logo);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->messages()
            ], 422);
        } else {

            $job = SarkariJob::create([
                'name' => $request->name,               
                'role' => $request->role,               
                'no_of_post' => $request->no_of_post,               
                'min_age' => $request->min_age,               
                'max_age' => $request->max_age,               
                'qualification' => $request->qualification,               
                'skills' => $request->skills,               
                'fees' => $request->fees,               
                'opening_date' => $request->opening_date,               
                'closing_date' => $request->closing_date,               
                'logo' => $logo,               
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
        $job = SarkariJob::find($id);
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
        'name' => 'required|string|min:3',
        'role' => 'required|string|min:3',
        'no_of_post' => 'required|string|min:3',
        'min_age' => 'required|string|min:3',
        'max_age' => 'required|string|min:3',
        'qualification' => 'required|string|min:3',
        'skills' => 'required|string|min:3',
        'fees' => 'required|string|min:3',
        'opening_date' => 'required|string|min:3',
        'closing_date' => 'required|string|min:3',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 422,
            'error' => $validator->messages()
        ], 422);
    } else {
        if ($id) {
            // Check if job exists
            $job = SarkariJob::find($id);
            if ($job) {
                // Update existing job
                $job->update([
                'name' => $request->name,               
                'role' => $request->role,               
                'no_of_post' => $request->no_of_post,               
                'min_age' => $request->min_age,               
                'max_age' => $request->max_age,               
                'qualification' => $request->qualification,               
                'skills' => $request->skills,               
                'fees' => $request->fees,               
                'opening_date' => $request->opening_date,               
                'closing_date' => $request->closing_date,                   
                ]);

                return response()->json([
                    'status' => 200,
                    'message' => "Job Updated Successfully"
                ], 200);
            }
        }
    }
}

    public function destroy($id)
    {
        $job  = SarkariJob::find($id);
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
