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
        $hirePlan = HirePlan::get();
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

    public function updateStatus(Request $request, int $id){
        $job = HirePlan::find($id);
            if($job){
            $data = $job->update([
                'status' => $request->status,   
            ]);
            // dd($data);
            if($data){
                return response()->json([
                    'status' => 200,
                    'message' => "Updated Successfully"
                ], 200);
            }
        }
        return response()->json([
            'status' => 400,
            'message' => "Error Updating Job Status"
        ], 400);
    }
    
        
    public function update(Request $request, int $id)
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
            $hirePlan = HirePlan::find($id);
            if ($hirePlan) {
                $hirePlan->update([
                    'name' => $request->name,
                    'features' => $request->features,
                    'price' => $request->price,                      
                ]);

                return response()->json([
                    'status' => 200,
                    'message' => "Hiring Plan Updated Successfully"
                ], 200);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => "No Plan Found"
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
                'message' => "Hire Plan Deleted"
            ], 200);
        }
        else{
            return response()->json([
                'status' => 500,
                'message' => "No Hire Found"
            ], 500);
        }       
    }

    public function restore($id)
    {
        $data = HirePlan::onlyTrashed()->findOrFail($id);
        $data->restore();

        return response()->json([
            'success' => true,
            'message' => 'Data restored successfully'
        ]);
    }

    public function trash()
    {
         $data = HirePlan::onlyTrashed()->get();
         return response()->json([
             'success' => true,
             'data' => $data
         ]);
    }

    public function forceDelete($id)
    {
        $data = HirePlan::onlyTrashed()->findOrFail($id);
        $data->forceDelete();

        return response()->json([
            'success' => true,
            'message' => 'Data permanently deleted'
        ]); 
   }
}
