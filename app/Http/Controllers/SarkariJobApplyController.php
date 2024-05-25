<?php

namespace App\Http\Controllers;

use App\Models\SarkariJobApply;
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

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',                 
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->messages()
            ], 422);
        } else {

            $job = SarkariJobApply::create([
                'payment_mode' => $request->payment_mode,          
                'user_id' => $request->user_id,                     
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
    
    public function update(Request $request, int $id){
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',                 
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 422,
            'error' => $validator->messages()
        ], 422);
    } else {
        if ($id) {
            // Check if job exists
            $job = SarkariJobApply::find($id);
            if ($job) {
                // Update existing job
                $job->update([
                    'user_id' => $request->user_id,
                    'payment_mode' => $request->payment_mode,                               
                ]);

                return response()->json([
                    'status' => 200,
                    'message' => "Job Updated Successfully"
                ], 200);
            }
        }

        // Create new job
        $newJob = SarkariJobApply::create([
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
