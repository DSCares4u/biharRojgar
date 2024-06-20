<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Address;
use App\Models\Document;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    // public function store(Request $request){
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string|min:3',
    //         'dob' => 'required',
    //         'mother' => 'required|string|min:3',
    //         'father' => 'required|string|min:3',
    //         'gender' => 'required',
    //         'mobile' => 'required',
    //         'marital' => 'required',
    //         'email' => 'required|email|unique:candidates',
    //         'id_mark' => 'required|string|min:3',
    //         'preferred_lang' => 'required',
    //         'religion' => 'required|string|min:3',
    //         'community' => 'required',
    //         'village' => 'required|string|min:3',
    //         'landmark' => 'required|string|min:3',
    //         'city' => 'required|string|min:3',
    //         'state' => 'required|string|min:3',
    //         'pincode' => 'required',          
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json([
    //             'status' => 422,
    //             'error' => $validator->messages()
    //         ], 422);
    //     } else {

    //         $candidate = Candidate::create([
    //             'name' => $request->name,
    //             'dob' => $request->dob,
    //             'mother' => $request->mother,
    //             'father' => $request->father,
    //             'gender' => $request->gender,
    //             'mobile' => $request->mobile,
    //             'marital' => $request->marital,
    //             'email' => $request->email,
    //             'id_mark' => $request->id_mark,
    //             'preferred_lang' => $request->preferred_lang,
    //             'religion' => $request->religion,
    //             'community' => $request->community,
    //             'village' => $request->village,
    //             'landmark' => $request->landmark,
    //             'area' => $request->area,
    //             'city' => $request->city,
    //             'state' => $request->state,
    //             'pincode' => $request->pincode,  
    //             'user_id' => $request->user_id,                     
    //         ]);
    
    //         if ($candidate) {
    //             return response()->json([
    //                 'status' => 200,
    //                 'message' => "We Will Connect You Soon"
    //             ], 200);
    //         } else {
    //             return response()->json([
    //                 'status' => 500,
    //                 'message' => "Unable to add your Request"
    //             ], 500);
    //         }
    //     }
    // }

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
    
    // public function updateAll(Request $request, int $id){
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string|min:3',
    //         'dob' => 'required',
    //         'mother' => 'required|string|min:3',
    //         'father' => 'required|string|min:3',
    //         'gender' => 'required',
    //         'mobile' => 'required',
    //         'marital' => 'required',
    //         'email' => 'required|email|unique:candidates,email,'.$id,
    //         'id_mark' => 'required|string|min:3',
    //         'preferred_lang' => 'required',
    //         'religion' => 'required|string|min:3',
    //         'community' => 'required',
    //         'village' => 'required|string|min:3',
    //         'landmark' => 'required|string|min:3',
    //         'city' => 'required|string|min:3',
    //         'area' => 'required|string',
    //         'state' => 'required|string|min:3',
    //         'pincode' => 'required',    
    //         'qualification' => 'required|string|min:3',
    //         'q_state' => 'required|string|min:3',
    //         'board' => 'required|string|min:3',
    //         'passing_year' => 'required',
    //         'experience' => 'required|string',
    //         'skills' => 'required|string',
    //         'id_proof_type' => 'required',
    //         'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
    //         'signature' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
    //         'id_proof' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
    //         'quali_certificate' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
    //         'other_certificate' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',                               
    //     ]);
    
    //     if ($validator->fails()) {
    //         return response()->json([
    //             'status' => 422,
    //             'error' => $validator->messages()
    //         ], 422);
    //     } else {
    //         if ($id) {
    //             // Check if job exists
    //             $candidate = Candidate::find($id);
    //             if ($candidate) {
    //                 // Update existing job
    //                 $candidate->update([
    //                     'name' => $request->name,
    //                     'dob' => $request->dob,
    //                     'mother' => $request->mother,
    //                     'father' => $request->father,
    //                     'gender' => $request->gender,
    //                     'mobile' => $request->mobile,
    //                     'marital' => $request->marital,
    //                     'email' => $request->email,
    //                     'id_mark' => $request->id_mark,
    //                     'preferred_lang' => $request->preferred_lang,
    //                     'religion' => $request->religion,
    //                     'community' => $request->community,
    //                     'village' => $request->village,
    //                     'landmark' => $request->landmark,
    //                     'area' => $request->area,
    //                     'city' => $request->city,
    //                     'state' => $request->state,
    //                     'pincode' => $request->pincode,  
    //                     'user_id' => $request->user_id,                     
    //                 ]);
    
    //                 return response()->json([
    //                     'status' => 200,
    //                     'message' => "Job Updated Successfully"
    //                 ], 200);
    //             }
    //         }
    
    //         // Create new job
    //         $newJob = Candidate::create([
    //             'name' => $request->name,
    //             'dob' => $request->dob,
    //             'mother' => $request->mother,
    //             'father' => $request->father,
    //             'gender' => $request->gender,
    //             'mobile' => $request->mobile,
    //             'marital' => $request->marital,
    //             'email' => $request->email,
    //             'id_mark' => $request->id_mark,
    //             'preferred_lang' => $request->preferred_lang,
    //             'religion' => $request->religion,
    //             'community' => $request->community,
    //             'village' => $request->village,
    //             'landmark' => $request->landmark,
    //             'area' => $request->area,
    //             'city' => $request->city,
    //             'state' => $request->state,
    //             'pincode' => $request->pincode,  
    //             'user_id' => $request->user_id,                     
    //         ]);
    
    //         return response()->json([
    //             'status' => 200,
    //             'message' => "Job Created Successfully",
    //             'job' => $newJob
    //         ], 200);
    //     }
        
    //     if($id){
    //         // Check if job exists
    //         $address = Address::find($id);
    //         if ($address) {
    //             // Update existing job
    //             $address->update([
    //                 'qualification' => $request->qualification,
    //                 'q_state' => $request->q_state,
    //                 'board' => $request->board,
    //                 'passing_year' => $request->passing_year,
    //                 'experience' => $request->experience,
    //                 'skills' => $request->skills,
    //                 'user_id' => $request->user_id,
    //             ]);

    //             return response()->json([
    //                 'status' => 200,
    //                 'message' => "Job Updated Successfully"
    //             ], 200);
    //         }
    //     }

    //     // creating new address

    //     $address = Address::create([
    //         'qualification' => $request->qualification,
    //         'q_state' => $request->q_state,
    //         'board' => $request->board,
    //         'passing_year' => $request->passing_year,
    //         'experience' => $request->experience,
    //         'skills' => $request->skills, 
    //         'user_id' => $request->user_id,                                 
    //     ]);

    //     if ($address) {
    //         return response()->json([
    //             'status' => 200,
    //             'message' => "We Will Connect You Soon"
    //         ], 200);
    //     } else {
    //         return response()->json([
    //             'status' => 500,
    //             'message' => "Unable to add your Request"
    //         ], 500);
    //     }
    // }
    // // Generate random numbers for filenames
    // $randomNumber = mt_rand(1000, 9999);

    // // Find the document to update or create a new one
    // $job = Document::find($id);

    // // Handle file uploads and update/create job
    // try {
    //     $data = [
    //         'id_proof_type' => $request->id_proof_type,
    //         'user_id' => $request->user_id,
    //     ];

    //     $fields = ['photo', 'signature', 'id_proof', 'quali_certificate', 'other_certificate'];

    //     foreach ($fields as $field) {
    //         if ($request->hasFile($field)) {
    //             $filename = strtoupper(substr($field, 0, 2)) . time() . $randomNumber . '.' . $request->$field->extension();
    //             $request->$field->move(public_path("image/candidate/$field"), $filename);
    //             $data[$field] = $filename;
    //         } elseif (!$job) {
    //             // If creating a new job and required field is missing
    //             throw new \Exception("Field '$field' is required.");
    //         }
    //     }

    //     if ($job) {
    //         // Update existing job
    //         $job->update($data);
    //         $message = "Job Updated Successfully";
    //     } else {
    //         // Create new job
    //         $job = Document::create($data);
    //         $message = "Job Created Successfully";
    //     }

    //     return response()->json([
    //         'status' => 200,
    //         'message' => $message,
    //     ], 200);

    // } catch (\Exception $e) {
    //     return response()->json([
    //         'status' => 500,
    //         'message' => $e->getMessage(),
    //     ], 500);
    // }
    //     }


    public function updateAll(Request $request, int $id)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|min:3',
        'dob' => 'required',
        'mother' => 'required|string|min:3',
        'father' => 'required|string|min:3',
        'gender' => 'required',
        'mobile' => 'required',
        'marital' => 'required',
        'email' => 'required|email|unique:candidates,email,' . $id,
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
        'qualification' => 'required|string|min:3',
        'q_state' => 'required|string|min:3',
        'board' => 'required|string|min:3',
        'passing_year' => 'required',
        'experience' => 'required|string',
        'skills' => 'required|string',
        'id_proof_type' => 'required',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        'signature' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        'id_proof' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        'quali_certificate' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        'other_certificate' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 422,
            'error' => $validator->messages()
        ], 422);
    }

    DB::beginTransaction();
    try {
        // Update or create candidate
        $candidateData = $request->only([
            'name', 'dob', 'mother', 'father', 'gender', 'mobile', 'marital', 'email', 
            'id_mark', 'preferred_lang', 'religion', 'community', 'village', 
            'landmark', 'city', 'area', 'state', 'pincode', 'user_id'
        ]);

        $candidate = Candidate::find($id);
        if ($candidate) {
            $candidate->update($candidateData);
        } else {
            $candidate = Candidate::create($candidateData);
        }

        // Update or create address
        $addressData = $request->only([
            'qualification', 'q_state', 'board', 'passing_year', 
            'experience', 'skills', 'user_id'
        ]);

        $address = Address::find($id);
        if ($address) {
            $address->update($addressData);
        } else {
            $address = Address::create($addressData);
        }

        // Handle file uploads for Document
        $randomNumber = mt_rand(1000, 9999);
        $fields = ['photo', 'signature', 'id_proof', 'quali_certificate', 'other_certificate'];
        $documentData = ['id_proof_type' => $request->id_proof_type, 'user_id' => $request->user_id];

        foreach ($fields as $field) {
            if ($request->hasFile($field)) {
                $filename = strtoupper(substr($field, 0, 2)) . time() . $randomNumber . '.' . $request->$field->extension();
                $request->$field->move(public_path("image/candidate/$field"), $filename);
                $documentData[$field] = $filename;
            }
        }

        $document = Document::find($id);
        if ($document) {
            $document->update($documentData);
            $message = "Job Updated Successfully";
        } else {
            Document::create($documentData);
            $message = "Job Created Successfully";
        }

        DB::commit();

        return response()->json([
            'status' => 200,
            'message' => $message,
        ], 200);

    } catch (\Exception $e) {
        DB::rollBack();
        return response()->json([
            'status' => 500,
            'message' => $e->getMessage(),
        ], 500);
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
