<?php

namespace App\Http\Controllers;

use App\Models\Yojna;
use Illuminate\Http\Request;
use Validator;

class YojnaController extends Controller
{
    public function index()
    {
        $yojna = Yojna::orderBy('created_at', 'desc')->get();
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
        $validator = Yojna::make($request->all(), [
            'ename' => 'required|string|min:3',                      
            'hname' => 'required|string|min:3',                      
        ]);

        // image Work 

        $logo = "DO". time() . "." . $request->logo->extension();        //upload on public/photo/image/filename
        $request->logo->move(public_path("image/yojna"), $logo);


        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->messages()
            ], 422);
        } else {

            $yojna = Yojna::create([
                'ename' => $request->ename,
                'hname' => $request->hname,
                'logo'=>$logo                            
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
            'ename' => 'required|string|min:3',
            'hname' => 'required|string|min:3',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->messages()
            ], 422);
        } else {
            $yojna = Yojna::find($id);
            if ($yojna) {
                $yojna->update([
                    'ename' => $request->ename,                    
                    'hname' => $request->hname,                    
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
