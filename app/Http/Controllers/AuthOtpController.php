<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Otp;
use Validator;
use App\Models\VerificationCode;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;


class AuthOtpController extends Controller
{

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function register(Request $request)
    {
        // Validation for name, email, and mobile when sending OTP
        if (!$request->has('otp')) {
            // Send OTP functionality
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email|max:255',
                'mobile' => 'required|unique:users,mobile|digits:10|regex:/^[6789][0-9]{9}$/',
            ]);

            // if ($validator->fails()) {
            //     return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
            // }

            if ($validator->fails()) {
                return response()->json([
                    'status' => 422,
                    'error' => $validator->messages()
                ], 422);
            }

            $otp = rand(100000, 999999);

            Otp::updateOrCreate(
                ['email' => $request->email],
                [
                    'otp' => $otp,
                    'expires_at' => now()->addMinutes(10),
                ]
            );

            // Store user data in session for later use
            $request->session()->put('user_data', $request->only(['name', 'email', 'mobile']));

            try {
                Mail::send('emails.otp', ['otp' => $otp], function ($message) use ($request) {
                    $message->to($request->email)->subject('Taskinn Solution OTP for Registration');
                });

                return response()->json(['success' => true, 'message' => 'OTP sent successfully.']);
            } catch (\Exception $e) {
                return response()->json(['success' => false, 'message' => 'Failed to send OTP.']);
            }
        } else {
            // Verify OTP functionality
            $validator = Validator::make($request->all(), [
                'otp' => 'required|numeric',
                'email' => 'required|email',
            ]);

            // if ($validator->fails()) {
            //     return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
            // }

            if ($validator->fails()) {
                return response()->json([
                    'status' => 422,
                    'error' => $validator->messages()
                ], 422);
            }

            $otpRecord = Otp::where('email', $request->email)->first();

            if (!$otpRecord || $otpRecord->otp != $request->otp) {
                return response()->json(['success' => false, 'message' => 'Invalid OTP.']);
            }

            if (now()->greaterThan($otpRecord->expires_at)) {
                return response()->json(['success' => false, 'message' => 'OTP has expired.']);
            }

            // Retrieve user data from session
            $userData = $request->session()->get('user_data');

            if (!$userData || $userData['email'] != $request->email) {
                return response()->json(['success' => false, 'message' => 'Session data not found or mismatch.']);
            }

            // Create the user
            $user = User::create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'mobile' => $userData['mobile'],
            ]);

            // Log in the user
            Auth::login($user);
            

            // Delete OTP record
            $otpRecord->delete();

            // Clear session data
            $request->session()->forget('user_data');
            // if ($user->isHirer == 1) {
            //     return redirect()->intended('/home-hirer');
            // } else {
            //     return redirect()->intended('/add-candidate');
            // }

            return response()->json(['success' => true, 'message' => 'Registration and Login successful.']);
        }
    }

    public function login(Request $request)
    {
        // Validation for name, email, and mobile when sending OTP
        if (!$request->has('otp')) {
            // Send OTP functionality
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|exists:users,email|max:255',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 422,
                    'error' => $validator->messages()
                ], 422);
            }

            // $user = User::where('email',$request->email)->where('isHirer',$request->is_hirer)->first();

            // if(!$user){
            //     return response()->json([
            //         'error' => 'Invalid Role'
            //     ], 422);
            // }


            // if ($validator->fails()) {
            //     return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
            // }

            $otp = rand(100000, 999999);

            Otp::updateOrCreate(
                ['email' => $request->email],
                [
                    'otp' => $otp,
                    'expires_at' => now()->addMinutes(10),
                ]
            );

            // Store user data in session for later use
            $request->session()->put('user_data', $request->only(['email']));

            try {
                Mail::send('emails.otp', ['otp' => $otp], function ($message) use ($request) {
                    $message->to($request->email)->subject('Your OTP for Login');
                });

                return response()->json(['success' => true, 'message' => 'OTP sent successfully.']);
            } catch (\Exception $e) {
                return response()->json(['success' => false, 'message' => 'Failed to send OTP.']);
            }
        } else {
            // Verify OTP functionality
            $validator = Validator::make($request->all(), [
                'otp' => 'required|numeric',
                'email' => 'required|email',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 422,
                    'error' => $validator->messages()
                ], 422);
            }

            $otpRecord = Otp::where('email', $request->email)->first();

            if (!$otpRecord || $otpRecord->otp != $request->otp) {
                return response()->json(['success' => false, 'message' => 'Invalid OTP.']);
            }

            if (now()->greaterThan($otpRecord->expires_at)) {
                return response()->json(['success' => false, 'message' => 'OTP has expired.']);
            }

            // Retrieve user data from session
            $userData = $request->session()->get('user_data');

            if (!$userData || $userData['email'] != $request->email) {
                return response()->json(['success' => false, 'message' => 'Session data not found or mismatch.']);
            }

            $user = User::where('email',$request->email)->first();

            // Log in the user
            Auth::login($user);
           

            // Delete OTP record
            $otpRecord->delete();

            // Clear session data
            $request->session()->forget('user_data');
            if ($user->isHirer == 1) {
                $hirer = true;
            } else {
                $hirer = false;
            }

            return response()->json(['success' => true,'isHirer'=> $hirer, 'message' => 'Login successful.']);
        }
    }
   
    // public function reSendOtp()
    // {
    //     $this->validate([
    //         'email' => 'required|email|exists:users,email',
    //         'password' => 'required|min:8',
    //     ]);

    //     $user = User::where('email', $this->email)->first();

    //     if ($user && Hash::check($this->password, $user->password)) {
    //         $otp = rand(100000, 999999);

    //         OTP::updateOrCreate(
    //             ['email' => $this->email],
    //             [
    //                 'otp' => $otp,
    //                 'expires_at' => Carbon::now()->addMinutes(10),
    //             ]
    //         );

    //         // Send OTP to email
    //         try {
    //             Mail::raw("Your OTP is: $otp", function ($message) {
    //                 $message->to($this->email)
    //                     ->subject('Your OTP for Login');
    //             });
    //             $this->isToggleOtp = true;
    //             $this->inputDisabled = true;
    //             $this->showOtpMessage = true;
    //             $this->resendOtpMessage = true;
    //         } catch (\Exception $e) {
    //             session()->flash('error', 'Failed to send OTP. Please try again.');
    //         }
    //     } else {
    //         session()->flash('error', 'Invalid email or password.');
    //     }
    // }   

}
