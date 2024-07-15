<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Validator;


class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $candidate = Document::orderBy('created_at', 'desc')->get();
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


//     public function store(Request $request)
// {
//     $validator = Validator::make($request->all(), [
//         'id_proof_type' => 'required',
//         'id_proof' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
//         'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
//         'signature' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
//         'quali_certificate' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
//         'other_certificate' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:10240'
//     ]);

//     if ($validator->fails()) {
//         return response()->json([
//             'status' => 422,
//             'errors' => $validator->messages()
//         ], 422);
//     }

//     // Generate a random number
//     $randomNumber = mt_rand(1000, 9999); 

//     // Handle the file upload
//     $photo = null;
//     if ($request->hasFile('photo')) {
//         $photo = "LO" . time() . $randomNumber . "." . $request->photo->extension();
//         $request->photo->move(public_path("image/yojna/photo"), $photo);
//     }

//     $signature = null;
//     if ($request->hasFile('signature')) {
//         $signature = "SI" . time() . $randomNumber . "." . $request->signature->extension();
//         $request->signature->move(public_path("image/signature"), $signature);
//     }

//     $id_proof = null;
//     if ($request->hasFile('id_proof')) {
//         $id_proof = "ID" . time() . $randomNumber . "." . $request->id_proof->extension();
//         $request->id_proof->move(public_path("image/id_proof"), $id_proof);
//     }

//     $quali_certificate = null;
//     if ($request->hasFile('quali_certificate')) {
//         $quali_certificate = "QU" . time() . $randomNumber . "." . $request->quali_certificate->extension();
//         $request->quali_certificate->move(public_path("image/quali_certificate"), $quali_certificate);
//     }

//     $other_certificate = null;
//     if ($request->hasFile('other_certificate')) {
//         $other_certificate = "OT" . time() . $randomNumber . "." . $request->other_certificate->extension();
//         $request->other_certificate->move(public_path("image/other_certificate"), $other_certificate);
//     }

//     $document = Document::create([
//         'id_proof_type' => $request->id_proof_type,
//         'photo' => $photo,
//         'signature' => $signature,
//         'id_proof' => $id_proof,
//         'quali_certificate' => $quali_certificate,
//         'other_certificate' => $other_certificate,
//         'user_id' => $request->user_id,
//     ]);

//     if ($document) {
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


    public function show($user_id)
    {
        $data = Document::with('user')->where('user_id', $user_id)->first();
        
        if ($data) {
            return response()->json([
                'status' => 200,
                'data' => $data
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => "No data found"
            ], 404);
        }
    }

    public function update(Request $request, int $user_id)
{        
    // Validate the request data
    $validator = Validator::make($request->all(), [
        'id_proof_type' => 'required',
        'photo' => 'nullable|max:10240',
        'signature' => 'nullable|max:10240',
        'id_proof' => 'nullable|max:10240',
        'quali_certificate' => 'nullable|max:10240',
        'other_certificate' => 'nullable|max:10240',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 422,
            'error' => $validator->messages()
        ], 422);
    }

    // Generate random numbers for filenames
    $randomNumber = mt_rand(1000, 9999);

    // Find the document to update or create a new one
    $job = Document::with('user')->where('user_id', $user_id)->first();

    // Handle file uploads and update/create job
    try {
        $data = [
            'id_proof_type' => $request->id_proof_type,
            'user_id'=>$user_id
        ];

        $fields = ['photo', 'signature', 'id_proof', 'quali_certificate', 'other_certificate'];

        foreach ($fields as $field) {
            if ($request->hasFile($field)) {
                $filename = strtoupper(substr($field, 0, 2)) . time() . $randomNumber . '.' . $request->$field->extension();
                $request->$field->move(public_path("image/candidate/$field"), $filename);
                $data[$field] = $filename;
            } elseif (!$job) {
                // If creating a new job and required field is missing
                throw new \Exception("Field '$field' is required.");
            }
        }

        if ($job) {
            // Update existing job
            $job->update($data);
            $message = "Job Updated Successfully";
        } else {
            // Create new job
            $job = Document::create($data);
            $message = "Job Created Successfully";
        }

        return response()->json([
            'status' => 200,
            'message' => $message,
        ], 200);

    } catch (\Exception $e) {
        return response()->json([
            'status' => 500,
            'message' => $e->getMessage(),
        ], 500);
    }
}

public function destroy($id)
{
    $data  = Document::find($id);
    if($data){
        $data->delete();
        return response()->json([
            'status' => 200,
            'message' => "data Deleted"
        ], 200);
    }
    else{
        return response()->json([
            'status' => 500,
            'message' => "No data Found"
        ], 500);
    }       
}

}