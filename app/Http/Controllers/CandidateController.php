<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Address;
use App\Models\Document;
use App\Models\User;
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

    public function show($user_id){
        $candidate = Candidate::with('user')->where('user_id', $user_id)->first();
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
    
    public function update(Request $request, int $user_id){
        $validator = Validator::make($request->all(), [
        'name' => 'required|string|min:3',
        'dob' => 'required',
        'mother' => 'required|string|min:3',
        'father' => 'required|string|min:3',
        'gender' => 'required',
        'mobile' => 'required',
        'marital' => 'required',
        'email' => 'required|email',
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
        if ($user_id) {
            // Check if job exists
            // $candidate = Candidate::find($id);
            $candidate = Candidate::with('user')->where('user_id', $user_id)->first();
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

    public function updateAll(Request $request, int $user_id){
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|min:3',
        'dob' => 'required',
        'mother' => 'required|string|min:3',
        'father' => 'required|string|min:3',
        'gender' => 'required',
        'mobile' => 'required',
        'marital' => 'required',
        'email' => 'required|email',
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

    $candidate = Candidate::with('user')->where('user_id', $user_id)->first();
    if ($candidate) {
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
        ]);
    }

    $address = Address::with('user')->where('user_id', $user_id)->first();
    if ($address) {
        $address->update([
            'qualification' => $request->qualification,
            'q_state' => $request->q_state,
            'board' => $request->board,
            'passing_year' => $request->passing_year,
            'experience' => $request->experience,
            'skills' => $request->skills,
        ]);
    }

    $document = Document::with('user')->where('user_id', $user_id)->first();
    if ($document) {
        $randomNumber = mt_rand(1000, 9999);

        if ($request->hasFile('photo')) {
            $photo = "IMG" . time() . $randomNumber . "." . $request->photo->extension();
            $request->photo->move(public_path("image/candidate/photo"), $photo);
            $document->photo = $photo;
        }

        if ($request->hasFile('signature')) {
            $signature = "SIG" . time() . $randomNumber . "." . $request->signature->extension();
            $request->signature->move(public_path("image/candidate/signature"), $signature);
            $document->signature = $signature;
        }

        if ($request->hasFile('id_proof')) {
            $id_proof = "ID" . time() . $randomNumber . "." . $request->id_proof->extension();
            $request->id_proof->move(public_path("image/candidate/id_proof"), $id_proof);
            $document->id_proof = $id_proof;
        }

        if ($request->hasFile('quali_certificate')) {
            $quali_certificate = "QC" . time() . $randomNumber . "." . $request->quali_certificate->extension();
            $request->quali_certificate->move(public_path("image/candidate/quali_certificate"), $quali_certificate);
            $document->quali_certificate = $quali_certificate;
        }

        if ($request->hasFile('other_certificate')) {
            $other_certificate = "OC" . time() . $randomNumber . "." . $request->other_certificate->extension();
            $request->other_certificate->move(public_path("image/candidate/other_certificate"), $other_certificate);
            $document->other_certificate = $other_certificate;
        }

        $document->update([
            'id_proof_type' => $request->id_proof_type,
        ]);
    }

    return response()->json([
        'status' => 200,
        'message' => "Data Updated Successfully"
    ], 200);
}


    public function showAll($user_id)
    {
        $candidate = Candidate::with('user')->where('user_id', $user_id)->first();
        $document = Document::where('user_id', $user_id)->first();
        $address = Address::where('user_id', $user_id)->first();
        
        if ($candidate || $document || $address) {
            return response()->json([
                'status' => 200,
                'data' => [
                    'candidate' => $candidate,
                    'document' => $document,
                    'address' => $address,
                ]
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => "No data found"
            ], 404);
        }
    }

    public function destroyAll($user_id){

    $candidate = Candidate::where('user_id', $user_id)->first();
    $document = Document::where('user_id', $user_id)->first();
    $address = Address::where('user_id', $user_id)->first();

    // Check if any of the data exists
    if ($candidate || $document || $address) {
        // Delete the candidate data if it exists
        if ($candidate) {
            $candidate->delete();
        }

        // Delete the document data if it exists
        if ($document) {
            $document->delete();
        }

        // Delete the address data if it exists
        if ($address) {
            $address->delete();
        }

        // Return a success response
        return response()->json([
            'status' => 200,
            'message' => "Data Deleted Successfully"
        ], 200);
    } else {
        // Return a response indicating no data found
        return response()->json([
            'status' => 404,
            'message' => "No Data Found"
        ], 404);
    }
}


    public function restoreAll($id)
{
    $candidate = Candidate::onlyTrashed()->findOrFail($id);
    $address = Address::onlyTrashed()->findOrFail($id);
    $document = Document::onlyTrashed()->findOrFail($id);

    $candidate->restore();
    $address->restore();
    $document->restore();

    return response()->json([
        'success' => true,
        'message' => 'Data restored successfully'
    ]);
}


public function trashAll()
{
    $candidates = Candidate::onlyTrashed()->get();
    $addresses = Address::onlyTrashed()->get();
    $documents = Document::onlyTrashed()->get();

    return response()->json([
        'success' => true,
        'candidates' => $candidates,
        'addresses' => $addresses,
        'documents' => $documents
    ]);
}


public function forceDeleteAll($id)
{
    $candidate = Candidate::onlyTrashed()->findOrFail($id);
    $address = Address::onlyTrashed()->findOrFail($id);
    $document = Document::onlyTrashed()->findOrFail($id);

    $candidate->forceDelete();
    $address->forceDelete();
    $document->forceDelete();

    return response()->json([
        'success' => true,
        'message' => 'Data permanently deleted'
    ]);
}

// public function forceDeletee($id)
// {
//     // Retrieve the trashed candidate
//     $candidate = Candidate::onlyTrashed()->findOrFail($id);
    
//     // Find the associated user, if any
//     $user = User::find($candidate->user_id);

//     // Retrieve related trashed records
//     $address = Address::onlyTrashed()->where('candidate_id', $id)->first();
//     $document = Document::onlyTrashed()->where('candidate_id', $id)->first();

//     // Force delete the related records
//     if ($address) {
//         $address->forceDelete();
//     }

//     if ($document) {
//         $document->forceDelete();
//     }

//     // Force delete the candidate
//     $candidate->forceDelete();

//     // Force delete the associated user
//     if ($user) {
//         $user->forceDelete();
//     }

//     return response()->json([
//         'success' => true,
//         'message' => 'Data permanently deleted'
//     ]);
// }

}