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
            'wtsp_mobile' => 'required|digits:10|regex:/^[0-9]{10}$/',
            'email' => 'required|email',
            'city' => 'required',
            'state' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }

         // Check if the user has already applied for yojna
         $existingApplication = YojnaForm::where('mobile', $request->mobile)->where('yojna_id', $request->yojna_id)->first();

        if ($existingApplication) {
            return response()->json([
                'status' => 409,
                'message' => `You have already applied for this Yojna.`
            ], 409);
        }

        $yojna = YojnaForm::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'wtsp_mobile' => $request->wtsp_mobile,
            'email' => $request->email,
            'city' => $request->city,
            'state' => $request->state,
            'yojna_id' => $request->yojna_id
        ]);

        if ($yojna) {
            return response()->json([
                'status' => 200,
                'message' => "You Have SuccessFully Applied"
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
        $yojna = YojnaForm::with("user")-where('id',$id)->first();
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
            'name' => 'required|string|min:3',
            'mobile' => 'required|digits:10|regex:/^[0-9]{10}$/',
            'wtsp_mobile' => 'required|digits:10|regex:/^[0-9]{10}$/',
            'email' => 'required|email',
            'city' => 'required',
            'state' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->messages()
            ], 422);
        }

        $yojna = YojnaForm::find($id);
        if (!$yojna) {
            return response()->json([
                'status' => 500,
                'message' => "No Form Found"
            ], 500);
        }

        $yojna->update([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'wtsp_mobile' => $request->wtsp_mobile,
            'email' => $request->email,
            'city' => $request->city,
            'state' => $request->state,
            'yojna_id' => $request->yojna_id
        ]);

        return response()->json([
            'status' => 200,
            'message' => "Form Updated Successfully"
        ], 200);
    }

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
