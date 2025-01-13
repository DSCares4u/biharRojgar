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

    // public function store(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string',                   
    //         'mobile' => 'required|unique:users',                   
    //     ]);
    
    //     if ($validator->fails()) {
    //         return response()->json([
    //             'status' => 422,
    //             'error' => $validator->messages()
    //         ], 422);
    //     } else {    
    //         $user = User::create([
    //             'name' => $request->name,                                       
    //             'mobile' => $request->mobile,                                       
    //         ]);
    
    //         if ($user) {
    //             return response()->json([
    //                 'user_id' => $user->id,
    //                 'message' => 'User registered successfully'
    //             ]);
    //         } else {
    //             return response()->json([
    //                 'status' => 500,
    //                 'message' => "Unable to add your Request"
    //             ], 500);
    //         }
    //     }
    // }

    public function checkUser(Request $request)
    {
        $mobile = $request->input('mobile');
        $user = User::where('mobile', $mobile)->first();

        if ($user) {
            return response()->json(['exists' => true, 'user_id' => $user->id]);
        } else {
            return response()->json(['exists' => false]);
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


    public function adminRegister(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => 1234567890,
            // 'isAdmin'=> 0,
            'password' => Hash::make($request->password),
        ]);

        if($user){
            // Auth::login($user);
            return redirect('/')->with('success', 'Registration successful!');
        }
        else{
            return redirect('auth.login')->with('error', 'Unable to login. Please try again.');
        }
    }

    public function adminLogin(Request $req){
        if ($req->isMethod("post")) {
            $credentials = $req->validate([
                'email' => 'required|email',
                'password' => 'required|min:8',
            ]);

            if (Auth::attempt($credentials)) {
                $req->session()->regenerate();

                if (Auth::user()->isAdmin == 1) {
                    return redirect('/admin');
                } else {
                    Auth::logout();
                    return back()->withErrors(['email' => 'Unauthorized. Admin only.']);
                }
            } else {
                return back()->withErrors(['email' => 'Invalid email or password']);
            }
        }
        return view('auth.login');
    }

    

    // public function logout()
    // {
    //     Auth::logout();
    //     return redirect()->route('login')->with('success', 'Logout successfully');
    // }

}

