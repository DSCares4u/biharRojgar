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

    // public function store(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'id_proof_type' => 'required',            
    //         'id_proof' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',  // Add validation for photo
    //         'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',  // Add validation for photo
    //         'signature' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',  // Add validation for photo
    //         'quali_certificate' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',  // Add validation for photo          
    //     ]);

    //     // image & pdf Work  

    //     $randomNumber = mt_rand(1000,9999); // Generate a random number

    //       // Handle the file upload
    //     if ($request->hasFile('photo')) {
    //         $photo = "LO" . time() . $randomNumber. "." . $request->photo->extension();
    //         $request->photo->move(public_path("image/yojna/photo"), $photo);
    //     } else {
    //         return response()->json([
    //             'status' => 422,
    //             'errors' => ['photo' => 'photo is required.']
    //         ], 422);
    //     }
    //       // Handle the file upload
    //     if ($request->hasFile('signature')) {
    //         $signature = "SI". time() . $randomNumber . "." . $request->signature->extension();        //upload on public/photo/image/filename
    //     $request->signature->move(public_path("image/signature"), $signature);
    //     } else {
    //         return response()->json([
    //             'status' => 422,
    //             'errors' => ['signature' => 'signature is required.']
    //         ], 422);
    //     }
    //       // Handle the file upload
    //     if ($request->hasFile('id_proof')) {
    //         $id_proof = "ID". time() . $randomNumber . "." . $request->id_proof->extension();        //upload on public/photo/image/filename
    //         $request->id_proof->move(public_path("image/id_proof"), $id_proof);
    //     } else {
    //         return response()->json([
    //             'status' => 422,
    //             'errors' => ['id_proof' => 'Id Proof is required.']
    //         ], 422);
    //     }
    //       // Handle the file upload
    //     if ($request->hasFile('quali_certificate')) {
    //         $quali_certificate = "QU". time() . $randomNumber . "." . $request->quali_certificate->extension();        //upload on public/photo/image/filename
    //         $request->quali_certificate->move(public_path("image/quali_certificate"), $quali_certificate);    
    //     } else {
    //         return response()->json([
    //             'status' => 422,
    //             'errors' => ['quali_certificate' => 'Qualification Certificate is required.']
    //         ], 422);
    //     }
     
    //     $other_certificate = "OT". time() . $randomNumber . "." . $request->other_certificate->extension();        //upload on public/photo/image/filename
    //     $request->other_certificate->move(public_path("image/other_certificate"), $other_certificate);

    //     if ($validator->fails()) {
    //         return response()->json([
    //             'status' => 422,
    //             'error' => $validator->messages()
    //         ], 422);
    //     } else {

    //         $document = Document::create([
    //             'id_proof_type' => $request->id_proof_type,
    //             'photo' => $photo,
    //             'signature'=>$signature,
    //             'id_proof'=>$id_proof,
    //             'quali_certificate'=>$quali_certificate,
    //             'other_certificate'=>$other_certificate ,
    //             'user_id' => $request->user_id,                                                  
    //         ]);
    
    //         if ($document) {
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
    
    public function show($id)
    {
        $job = Document::find($id);
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

    // public function update(Request $request, int $id)
    // {        
    //     $validator = Validator::make($request->all(), [
    //         'id_proof_type' => 'required',            
    //         'id_proof' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',  // Add validation for photo
    //         'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',  // Add validation for photo
    //         'signature' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',  // Add validation for photo
    //         'quali_certificate' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',  // Add validation for photo          
    //     ]);

    //     // image & pdf Work  

    //     $randomNumber = mt_rand(1000,9999); // Generate a random number

    //       // Handle the file upload
    //     if ($request->hasFile('photo')) {
    //         $photo = "LO" . time() . $randomNumber. "." . $request->photo->extension();
    //         $request->photo->move(public_path("image/yojna/photo"), $photo);
    //     } else {
    //         return response()->json([
    //             'status' => 422,
    //             'errors' => ['photo' => 'photo is required.']
    //         ], 422);
    //     }
    //       // Handle the file upload
    //     if ($request->hasFile('signature')) {
    //         $signature = "SI". time() . $randomNumber . "." . $request->signature->extension();        //upload on public/photo/image/filename
    //     $request->signature->move(public_path("image/signature"), $signature);
    //     } else {
    //         return response()->json([
    //             'status' => 422,
    //             'errors' => ['signature' => 'signature is required.']
    //         ], 422);
    //     }
    //       // Handle the file upload
    //     if ($request->hasFile('id_proof')) {
    //         $id_proof = "ID". time() . $randomNumber . "." . $request->id_proof->extension();        //upload on public/photo/image/filename
    //         $request->id_proof->move(public_path("image/id_proof"), $id_proof);
    //     } else {
    //         return response()->json([
    //             'status' => 422,
    //             'errors' => ['id_proof' => 'Id Proof is required.']
    //         ], 422);
    //     }
    //       // Handle the file upload
    //     if ($request->hasFile('quali_certificate')) {
    //         $quali_certificate = "QU". time() . $randomNumber . "." . $request->quali_certificate->extension();        //upload on public/photo/image/filename
    //         $request->quali_certificate->move(public_path("image/quali_certificate"), $quali_certificate);    
    //     } else {
    //         return response()->json([
    //             'status' => 422,
    //             'errors' => ['quali_certificate' => 'Qualification Certificate is required.']
    //         ], 422);
    //     }
     
    //     $other_certificate = "OT". time() . $randomNumber . "." . $request->other_certificate->extension();        //upload on public/photo/image/filename
    //     $request->other_certificate->move(public_path("image/other_certificate"), $other_certificate);
    
    //     if ($validator->fails()) {
    //         return response()->json([
    //             'status' => 422,
    //             'error' => $validator->messages()
    //         ], 422);
    //     } else {
    //         if ($id) {
    //             // Check if job exists
    //             $job = Document::find($id);
    //             if ($job) {
    //                 // Update existing job
    //                 $job->update([
    //                     'id_proof_type' => $request->id_proof_type,
    //                     'photo' => $photo,
    //                     'signature'=>$signature,
    //                     'id_proof'=>$id_proof,
    //                     'quali_certificate'=>$quali_certificate,
    //                     'other_certificate'=>$other_certificate  ,  
    //                     'user_id' => $request->user_id,                     
    //                 ]);
    
    //                 return response()->json([
    //                     'status' => 200,
    //                     'message' => "Job Updated Successfully"
    //                 ], 200);
    //             }
    //         }
    
    //         // Create new job
    //         $newJob = Document::create([
    //             'id_proof_type' => $request->id_proof_type,
    //             'photo' => $photo,
    //             'signature'=>$signature,
    //             'id_proof'=>$id_proof,
    //             'quali_certificate'=>$quali_certificate,
    //             'other_certificate'=>$other_certificate  ,  
    //             'user_id' => $request->user_id,                      
    //         ]);
    
    //         if ($newJob) {
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

    public function update(Request $request, int $id)
{        
    // $validator = Validator::make($request->all(), [
    //     'id_proof_type' => 'required',            
    //     'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',  // Add validation for photo
    //     'signature' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',  // Add validation for signature
    //     'id_proof' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',  // Add validation for id proof
    //     'quali_certificate' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',  // Add validation for qualification certificate
    //     'other_certificate' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',  // Add validation for other certificate
    // ]);

    // if ($validator->fails()) {
    //     return response()->json([
    //         'status' => 422,
    //         'error' => $validator->messages()
    //     ], 422);
    // }

    $randomNumber = mt_rand(1000, 9999);

    $job = Document::find($id);

    // Handle file uploads
    $photo = "LO" . time() . $randomNumber . "." . $request->photo->extension();
    $signature = "SI" . time() . $randomNumber . "." . $request->signature->extension();
    $id_proof = "ID" . time() . $randomNumber . "." . $request->id_proof->extension();
    $quali_certificate = "QU" . time() . $randomNumber . "." . $request->quali_certificate->extension();
    $other_certificate = "OT" . time() . $randomNumber . "." . $request->other_certificate->extension();

    $photo = $request->photo->move(public_path("image/yojna/photo"), $photo);
    $request->signature->move(public_path("image/signature"), $signature);
    $request->id_proof->move(public_path("image/id_proof"), $id_proof);
    $request->quali_certificate->move(public_path("image/quali_certificate"), $quali_certificate);
    $request->other_certificate->move(public_path("image/other_certificate"), $other_certificate);

    if ($job) {
        // Update job
        $job->update([
            'id_proof_type' => $request->id_proof_type,
            'photo' => $photo,
            'signature' => $signature,
            'id_proof' => $id_proof,
            'quali_certificate' => $quali_certificate,
            'other_certificate' => $other_certificate,
            'user_id' => $request->user_id,
        ]);

        return response()->json([
            'status' => 200,
            'message' => "Job Updated Successfully"
        ], 200);
    } else {
        // Create new job
        $newJob = Document::create([
            'id_proof_type' => $request->id_proof_type,
            'photo' => $photo,
            'signature' => $signature,
            'id_proof' => $id_proof,
            'quali_certificate' => $quali_certificate,
            'other_certificate' => $other_certificate,
            'user_id' => $request->user_id,
        ]);

        if ($newJob) {
            return response()->json([
                'status' => 200,
                'message' => "Job Created Successfully"
            ], 200);
        } else {
            return response()->json([
                'status' => 500,
                'message' => "Unable to create job"
            ], 500);
        }
    }
}

}