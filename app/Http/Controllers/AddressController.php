<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Validator;


class AddressController extends Controller
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
            'qualification' => 'required|string|min:3',
            'q_state' => 'required|string|min:3',
            'board' => 'required|string|min:3',
            'passing_year' => 'required',
            'experience' => 'required|string',
            'skills' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->messages()
            ], 422);
        } else {

            $address = Address::create([
                'qualification' => $request->qualification,
                'q_state' => $request->q_state,
                'board' => $request->board,
                'passing_year' => $request->passing_year,
                'experience' => $request->experience,
                'skills' => $request->skills, 
                'user_id' => $request->user_id,                                 
            ]);
    
            if ($address) {
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
        $address = Address::find($id);
        if($address){
            return response()->json([
                'status' => 200,
                'data' => $address
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
            'qualification' => 'required|string|min:3',
            'q_state' => 'required|string|min:3',
            'board' => 'required|string|min:3',
            'passing_year' => 'required',
            'experience' => 'required|string',
            'skills' => 'required|string',                    
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->messages()
            ], 422);
        } else {
            // Check if job exists
            $job = Address::find($id);
            if ($job) {
                // Update existing job
                $job->update([
                    'qualification' => $request->qualification,
                    'q_state' => $request->q_state,
                    'board' => $request->board,
                    'passing_year' => $request->passing_year,
                    'experience' => $request->experience,
                    'skills' => $request->skills,
                    'user_id' => $request->user_id,
                ]);

                return response()->json([
                    'status' => 200,
                    'message' => "Job Updated Successfully"
                ], 200);
            }
        }
    }

}
