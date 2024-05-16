<?php

namespace App\Http\Controllers;

use App\Models\Hire;
use App\Models\HirePlan;
use Illuminate\Http\Request;
use Validator;

class HireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hire = Hire::with("hire_plan")->orderBy('created_at', 'desc')->get();
        if ($hire->count() > 0) {
            return response()->json([
                'status' => 200,
                'data' => $hire
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'data' => "No Records found"
            ], 404);
        }


        // $hire = Hire::orderBy('created_at', 'desc')->get();
        // if ($hire->count() > 0) {
        //     return response()->json([
        //         'status' => 200,
        //         'data' => $hire
        //     ], 200);
        // } else {
        //     return response()->json([
        //         'status' => 404,
        //         'data' => "No Records found"
        //     ], 404);
        // }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHireRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            'city' => 'required|string',
            'state' => 'required|string',
            'description' => 'required|string',
            'company_name' => 'required|string',
            'website' => 'required|string',
            'mobile' => 'required|string',
            'alt_mobile' => 'required|string',
            'email' => 'required|string',
            'plan_id'=>'required',
        ]);


        // Image & Document Work
        
        $logo = time() .  "." . $request->logo->extension();        //upload on public/photo/image/filename
        $request->logo->move(public_path("image/company/logo"), $logo);

        $roles = [];
        foreach ($request->inputs as $input) {
            $roles[] = $input;
        }


        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->messages()
            ], 422);
        } else {

            $hire = Hire::create([
                'name' => $request->name, 
                'roles' => json_encode($roles), 
                'city' => $request->city,          
                'state' => $request->state,          
                'description' => $request->description,          
                'company_name' => $request->company_name,          
                'website' => $request->website,          
                'mobile' => $request->mobile,          
                'alt_mobile' => $request->alt_mobile,          
                'email' => $request->email,          
                'hire_plan_id' => $request->plan_id, 
                'logo'=>$logo,         
            ]);    
            if ($hire) {
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
        $hire = Hire::find($id);
        if($hire){
            return response()->json([
                'status' => 200,
                'data' => $hire
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
            $hire = Hire::find($id);
            if ($hire) {
                $hire->update([
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
        $hire  = Hire::find($id);
        if($hire){
            $hire->delete();
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