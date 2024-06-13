<?php

namespace App\Http\Controllers;

use App\Models\Yojna;
use Illuminate\Http\Request;
use Validator;

class YojnaController extends Controller
{
    public function index()
    {
        $yojna = Yojna::with("yojna_category")->orderBy('created_at', 'desc')->get();
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
        // Validate the request
        $validator = Validator::make($request->all(), [
            'ename' => 'required|string',                      
            'hname' => 'required|string',                      
            'description' => 'required|string|min:3',                      
            'features' => 'required|string|min:3',
            'documents' => 'required|string',
            'fees' => 'required|string',
            'market_fees' => 'required|string',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',  // Add validation for photo
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }

        // Handle the file upload
        if ($request->hasFile('logo')) {
            $logo = "LO" . time() . "." . $request->logo->extension();
            $request->logo->move(public_path("image/yojna/logo"), $logo);
        } else {
            return response()->json([
                'status' => 422,
                'errors' => ['logo' => 'Logo is required.']
            ], 422);
        }

        // Create the Yojna record
        $yojna = Yojna::create([
            'ename' => $request->ename,
            'hname' => $request->hname,
            'description' => $request->description,
            'fees' => $request->fees,
            'market_fees' => $request->market_fees,
            'documents' => $request->documents,
            'features' => $request->features,
            'logo' => $logo,
            'yojna_category_id' => $request->yojna_category_id                       
        ]);

        // Check if the Yojna was created successfully
        if ($yojna) {
            return response()->json([
                'status' => 200,
                'message' => "We will connect with you soon."
            ], 200);
        } else {
            return response()->json([
                'status' => 500,
                'message' => "Unable to add your request."
            ], 500);
        }
    }    

    public function show($id)
    {
        $yojna = Yojna::find($id);
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

    public function update(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'ename' => 'required|string',                      
            'hname' => 'required|string',                      
            'description' => 'required|string|min:3',                      
            'features' => 'required|string|min:3',
            'documents' => 'required|string',
            'fees' => 'required|string',
            'market_fees' => 'required|string',
            // 'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',  // Add validation for photo
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->messages()
            ], 422);

             // Handle the file upload
            // if ($request->hasFile('logo')) {
            //     $logo = "LO" . time() . "." . $request->logo->extension();
            //     $request->logo->move(public_path("image/yojna/logo"), $logo);
            // } else {
            //     return response()->json([
            //         'status' => 422,
            //         'errors' => ['logo' => 'Logo is required.']
            //     ], 422);
            // }
        } else {

            $yojna = Yojna::find($id);
            if ($yojna) {
                $yojna->update([
                    'ename' => $request->ename,
                    'hname' => $request->hname,
                    'description' => $request->description,
                    'fees' => $request->fees,
                    'market_fees' => $request->market_fees,
                    'documents' => $request->documents,
                    'features' => $request->features,
                    // 'logo' => $logo,
                    'yojna_category_id' => $request->yojna_category_id                                        
                ]);

                return response()->json([
                    'status' => 200,
                    'message' => "Yojna Updated Successfully"
                ], 200);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => "No Yojna Found"
                ], 500);
            }
        }
    }

    public function destroy($id)
    {
        $yojna  = Yojna::find($id);
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
