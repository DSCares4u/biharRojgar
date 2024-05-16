<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Validator;


class UserController extends Controller
{
    public function index()
    {
        $user = User::orderBy('created_at', 'desc')->get();
        if ($user->count() > 0) {
            return response()->json([
                'status' => 200,
                'data' => $user
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
            'mobile' => 'required|unique:users',                   
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->messages()
            ], 422);
        } else {    
            $user = User::create([
                'name' => $request->name,                                       
                'mobile' => $request->mobile,                                       
            ]);
    
            if ($user) {
                return response()->json([
                    'status' => 200,
                    'message' => "New User Added Successfully"
                ], 200);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => "Unable to add your Request"
                ], 500);
            }
        }
    }

    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');

    //     if (Auth::attempt($credentials)) {
    //         // Authentication passed...
    //         return redirect()->intended('/dashboard');
    //     }

    //     return redirect()->back()->withInput($request->only('email'))->withErrors([
    //         'email' => 'These credentials do not match our records.',
    //     ]);
    // }

    public function login(Request $request){

        $validator = Validator::make($request->all(), [
            'mobile' => 'required|unique:users',                   
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->messages()
            ], 422);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    

    public function show($id)
    {
        $user = User::find($id);
        if($user){
            return response()->json([
                'status' => 200,
                'data' => $user
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
            $user = User::find($id);
            if ($user) {
                $user->update([
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
        $user  = User::find($id);
        if($user){
            $user->delete();
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

