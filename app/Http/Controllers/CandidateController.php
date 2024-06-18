<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class CandidateController extends Controller
{
    public function index(){
        $candidate = Candidate::orderBy('created_at', 'desc')->get();
        if ($candidate->count() > 0) {
            return response()->json([
                'status' => 200,
                'data' => $candidate
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
            'name' => 'required|string|min:3',
            'dob' => 'required',
            'mother' => 'required|string|min:3',
            'father' => 'required|string|min:3',
            'gender' => 'required',
            'mobile' => 'required',
            'marital' => 'required',
            'email' => 'required|email|unique:candidates',
            'id_mark' => 'required|string|min:3',
            'preferred_lang' => 'required',
            'religion' => 'required|string|min:3',
            'community' => 'required',
            'village' => 'required|string|min:3',
            'landmark' => 'required|string|min:3',
            'city' => 'required|string|min:3',
            'state' => 'required|string|min:3',
            'pincode' => 'required',          
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->messages()
            ], 422);
        } else {

            $candidate = Candidate::create([
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
                'area' => $request->area,
                'city' => $request->city,
                'state' => $request->state,
                'pincode' => $request->pincode,  
                'user_id' => $request->user_id,                     
            ]);
    
            if ($candidate) {
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



    public function getDistrictAndState(Request $request){
        $pincode = $request->input('pincode');

        $response = Http::get('https://api.postalpincode.in/pincode/' . $pincode);

        if ($response->successful()) {
            $data = $response->json()[0];
            $district = $data['PostOffice'][0]['District'];
            $state = $data['PostOffice'][0]['State'];

            return response()->json([
                'district' => $district,
                'state' => $state,
            ]);
        } else {
            return response()->json([
                'error' => 'Failed to fetch data'
            ], $response->status());
        }
    }

    public function show($id){
        $candidate = Candidate::find($id);
        if($candidate){
            return response()->json([
                'status' => 200,
                'data' => $candidate
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
        'dob' => 'required',
        'mother' => 'required|string|min:3',
        'father' => 'required|string|min:3',
        'gender' => 'required',
        'mobile' => 'required',
        'marital' => 'required',
        'email' => 'required|email|unique:candidates,email,'.$id,
        'id_mark' => 'required|string|min:3',
        'preferred_lang' => 'required',
        'religion' => 'required|string|min:3',
        'community' => 'required',
        'village' => 'required|string|min:3',
        'landmark' => 'required|string|min:3',
        'city' => 'required|string|min:3',
        'area' => 'required|string',
        'state' => 'required|string|min:3',
        'pincode' => 'required',                      
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 422,
            'error' => $validator->messages()
        ], 422);
    } else {
        if ($id) {
            // Check if job exists
            $candidate = Candidate::find($id);
            if ($candidate) {
                // Update existing job
                $candidate->update([
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
                    'area' => $request->area,
                    'city' => $request->city,
                    'state' => $request->state,
                    'pincode' => $request->pincode,  
                    'user_id' => $request->user_id,                     
                ]);

                return response()->json([
                    'status' => 200,
                    'message' => "Job Updated Successfully"
                ], 200);
            }
        }

        // Create new job
        $newJob = Candidate::create([
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
            'area' => $request->area,
            'city' => $request->city,
            'state' => $request->state,
            'pincode' => $request->pincode,  
            'user_id' => $request->user_id,                     
        ]);

        return response()->json([
            'status' => 200,
            'message' => "Job Created Successfully",
            'job' => $newJob
        ], 200);
    }
    }

    public function destroy($id){
        $candidate  = Candidate::find($id);
        if($candidate){
            $candidate->delete();
            return response()->json([
                'status' => 200,
                'message' => "Candidate Deleted"
            ], 200);
        }
        else{
            return response()->json([
                'status' => 500,
                'message' => "No Data Found"
            ], 500);
        }       
    }
}
