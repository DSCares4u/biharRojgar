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
            'category' => 'required',
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
                'r_fees' => $request->r_fees,               
                'opening_date' => $request->opening_date,               
                'closing_date' => $request->closing_date,               
                'job_type' => $request->job_type,               
                'location' => $request->location,               
                'description' => $request->description,               
                'category' => $request->category,               
                'min_salary' => $request->min_salary,               
                'max_salary' => $request->max_salary,               
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
        'name' => 'required|string',
        'role' => 'required|string',
        'no_of_post' => 'required|integer',
        'min_age' => 'required|integer',
        'max_age' => 'required|integer',
        'qualification' => 'required|string|min:3',
        'category' => 'required|string',
        'skills' => 'required|string|min:3',
        'fees' => 'required|integer',
        'opening_date' => 'required',
        'closing_date' => 'required',
        'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',  // Allow optional logo update
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

                 // Handle the file upload
                $logo = $job->logo; // Default to current logo
                if ($request->hasFile('logo')) {
                    $logo = time() . "." . $request->logo->extension();
                    $request->logo->move(public_path("image/sarkari/logo"), $logo);
                }
                // Update existing job
                $job->update([
                'name' => $request->name,               
                'role' => $request->role,               
                'no_of_post' => $request->no_of_post, 
                'logo' => $logo,              
                'min_age' => $request->min_age,               
                'max_age' => $request->max_age,               
                'qualification' => $request->qualification,               
                'skills' => $request->skills,               
                'fees' => $request->fees,               
                'r_fees' => $request->r_fees,               
                'opening_date' => $request->opening_date,               
                'closing_date' => $request->closing_date, 
                'category' => $request->category, 
                'description' => $request->description, 
                'min_salary' => $request->min_salary, 
                'max_salary' => $request->max_salary, 
                'job_type' => $request->job_type,               
                'location' => $request->location,                  
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

    public function restore($id)
    {
        $job = SarkariJob::onlyTrashed()->findOrFail($id);
        $job->restore();

        return response()->json([
            'success' => true,
            'message' => 'Job restored successfully'
        ]);
    }

    public function trash()
    {
         $jobs = SarkariJob::onlyTrashed()->get();
         return response()->json([
             'success' => true,
             'data' => $jobs
         ]);
    }

    public function forceDelete($id)
    {
        $job = SarkariJob::onlyTrashed()->findOrFail($id);
        $job->forceDelete();

        return response()->json([
            'success' => true,
            'message' => 'Job permanently deleted'
        ]); 
   }
}
