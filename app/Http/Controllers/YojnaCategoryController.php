<?php

namespace App\Http\Controllers;

use App\Models\YojnaCategory;
use Illuminate\Http\Request;
use Validator;

class YojnaCategoryController extends Controller
{
    public function index()
    {
        $yojnaCat = YojnaCategory::get();
        if ($yojnaCat->count() > 0) {
            return response()->json([
                'status' => 200,
                'data' => $yojnaCat
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
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->messages()
            ], 422);
        } else {

            $yojnaCat = YojnaCategory::create([
                'name' => $request->name,                            
                'description' => $request->description,                            
            ]);
    
            if ($yojnaCat) {
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
        $yojnaCat = YojnaCategory::find($id);
        if($yojnaCat){
            return response()->json([
                'status' => 200,
                'data' => $yojnaCat
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
        $job = YojnaCategory::find($id);
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
            'name' => 'required|string|min:3',            
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->messages()
            ], 422);
        } else {
            $yojnaCat = YojnaCategory::find($id);
            if ($yojnaCat) {
                $yojnaCat->update([
                    'name' => $request->name,
                    'description' => $request->description,                                                
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
        $yojnaCat  = YojnaCategory::find($id);
        if($yojnaCat){
            $yojnaCat->delete();
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

    public function restore($id)
    {
        $data = YojnaCategory::onlyTrashed()->findOrFail($id);
        $data->restore();

        return response()->json([
            'success' => true,
            'message' => 'Data restored successfully'
        ]);
    }

    public function trash()
    {
         $data = YojnaCategory::onlyTrashed()->get();
         return response()->json([
             'success' => true,
             'data' => $data
         ]);
    }

    public function forceDelete($id)
    {
        $data = YojnaCategory::onlyTrashed()->findOrFail($id);
        $data->forceDelete();

        return response()->json([
            'success' => true,
            'message' => 'Data permanently deleted'
        ]); 
   }
}
