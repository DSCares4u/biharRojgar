<?php

namespace App\Http\Controllers;

use App\Models\YojnaForm;
use Illuminate\Http\Request;
use Validator;

class YojnaFormController extends Controller
{
    public function index()
    {
        $yojna = YojnaForm::with("yojna")->orderBy('created_at', 'desc')->get();
        if ($yojna->count() > 0) {
            return response()->json([
                'status' => 200,
                'data' => $yojna
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
            'mobile' => 'required|digits:10|regex:/^[0-9]{10}$/',
            'email' => 'required|email',
            'city' => 'required',
            'state' => 'required',
            'pincode' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }

        $yojna = YojnaForm::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'city' => $request->city,
            'state' => $request->state,
            'yojna_id' => $request->yojna_id
        ]);

        if ($yojna) {
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

    public function show($id)
    {
        $yojna = YojnaForm::find($id);
        if($yojna){
            return response()->json([
                'status' => 200,
                'data' => $yojna
            ], 200);
        }
        else{
            return response()->json([
                'status' => 404,
                'message' => "No Yojna Found"
            ], 404);
        }
    }

    // public function update(Request $request, int $id)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'ename' => 'required|string|min:3',
    //         'hname' => 'required|string|min:3',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json([
    //             'status' => 422,
    //             'error' => $validator->messages()
    //         ], 422);
    //     } else {
    //         $photo = "YJ". time() . "." . $request->photo->extension();        //upload on public/photo/image/filename
    //         $request->photo->move(public_path("image/yojna/photo"), $photo);  
    
    //         $document = "YJDOC". time() . "." . $request->document->extension();        //upload on public/photo/image/filename
    //         $request->document->move(public_path("image/yojna/document"), $document);      
    
    //         $yojna = YojnaForm::find($id);
    //         if ($yojna) {
    //             $yojna->update([
    //                 'name' => $request->name,
    //                 'father' => $request->father,
    //                 'mother' => $request->mother,
    //                 'dob' => $request->dob,
    //                 'mobile' => $request->mobile,
    //                 'email' => $request->email,
    //                 'address' => $request->address,
    //                 'gender' => $request->gender,
    //                 'photo'=>$photo,     
    //                 'document'=>$document,     
    //                 'yojna_id'=>$request->yojna_id                                                   
    //             ]);

    //             return response()->json([
    //                 'status' => 200,
    //                 'message' => "Yojna Updated Successfully"
    //             ], 200);
    //         } else {
    //             return response()->json([
    //                 'status' => 500,
    //                 'message' => "No Yojna Found"
    //             ], 500);
    //         }
    //     }
    // }

    public function destroy($id)
    {
        $yojna  = YojnaForm::find($id);
        if($yojna){
            $yojna->delete();
            return response()->json([
                'status' => 200,
                'message' => "Yojna Deleted"
            ], 200);
        }
        else{
            return response()->json([
                'status' => 500,
                'message' => "No Yojna Found"
            ], 500);
        }       
    }
}
