<?php

namespace App\Http\Controllers;

use App\Models\HirePlan;
use Illuminate\Http\Request;
use Validator;
class HirePlanController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hirePlan = HirePlan::orderBy('created_at', 'desc')->get();
        if ($hirePlan->count() > 0) {
            return response()->json([
                'status' => 200,
                'data' => $hirePlan
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
            'name' => 'required|string',
            'features' => 'required|string|min:3',
            'price' => 'required|string',           
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->messages()
            ], 422);
        } else {

            $hirePlan = HirePlan::create([
                'name' => $request->name,
                'features' => $request->features,
                'price' => $request->price,                              
            ]);
    
            if ($hirePlan) {
                return response()->json([
                    'status' => 200,
                    'message' => "New Plan Added Successfully"
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
        $hirePlan = HirePlan::find($id);
        if($hirePlan){
            return response()->json([
                'status' => 200,
                'data' => $hirePlan
            ], 200);
        }
        else{
            return response()->json([
                'status' => 404,
                'message' => "No call Found"
            ], 404);
        }
    }
        
    public function update(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->messages()
            ], 422);
        } else {
            $hirePlan = HirePlan::find($id);
            if ($hirePlan) {
                $hirePlan->update([
                    'name' => $request->name,
                    
                ]);

                return response()->json([
                    'status' => 200,
                    'message' => "Hiring Updated Successfully"
                ], 200);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => "No Hire Found"
                ], 500);
            }
        }
    }

    public function destroy($id)
    {
        $hirePlan  = HirePlan::find($id);
        if($hirePlan){
            $hirePlan->delete();
            return response()->json([
                'status' => 200,
                'message' => "Hire Deleted"
            ], 200);
        }
        else{
            return response()->json([
                'status' => 500,
                'message' => "No Hire Found"
            ], 500);
        }       
    }
}
