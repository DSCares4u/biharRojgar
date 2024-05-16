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
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_proof_type' => 'required',            
            // 'photo' => 'required',            
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

            $document = Document::create([
                'id_proof_type' => $request->id_proof_type,
                'photo' => $photo,
                'signature'=>$signature,
                'id_proof'=>$id_proof,
                'quali_certificate'=>$quali_certificate,
                'other_certificate'=>$other_certificate ,
                'user_id' => $request->user_id,                                                  
            ]);
    
            if ($document) {
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

    public function update(Request $request, int $id){
        
        $validator = Validator::make($request->all(), [
            'id_proof_type' => 'required',                            
        ]);

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
            if ($id) {
                // Check if job exists
                $job = Document::find($id);
                if ($job) {
                    // Update existing job
                    $job->update([
                        'id_proof_type' => $request->id_proof_type,
                        'photo' => $photo,
                        'signature'=>$signature,
                        'id_proof'=>$id_proof,
                        'quali_certificate'=>$quali_certificate,
                        'other_certificate'=>$other_certificate  ,  
                        'user_id' => $request->user_id,                     
                    ]);
    
                    return response()->json([
                        'status' => 200,
                        'message' => "Job Updated Successfully"
                    ], 200);
                }
            }
    
            // Create new job
            $newJob = Document::create([
                'id_proof_type' => $request->id_proof_type,
                'photo' => $photo,
                'signature'=>$signature,
                'id_proof'=>$id_proof,
                'quali_certificate'=>$quali_certificate,
                'other_certificate'=>$other_certificate  ,  
                'user_id' => $request->user_id,                      
            ]);
    
            return response()->json([
                'status' => 200,
                'message' => "Job Created Successfully",
                'job' => $newJob
            ], 200);
        }
    }
}