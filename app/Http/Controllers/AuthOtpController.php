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
                    $message->to($request->email)->subject('Your OTP for Registration');
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

            $user = User::where('email',$request->email)->first();

            // Log in the user
            Auth::login($user);
            if ($user->isHirer == 1) {
                return redirect()->intended('/home-hirer');
            } else {
                return redirect()->intended('/add-candidate');
            }

            // Delete OTP record
            $otpRecord->delete();

            // Clear session data
            $request->session()->forget('user_data');

            return response()->json(['success' => true, 'message' => 'Login successful.']);
        }
    }
   
    public function reSendOtp()
    {
        $this->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8',
        ]);

        $user = User::where('email', $this->email)->first();

        if ($user && Hash::check($this->password, $user->password)) {
            $otp = rand(100000, 999999);

            OTP::updateOrCreate(
                ['email' => $this->email],
                [
                    'otp' => $otp,
                    'expires_at' => Carbon::now()->addMinutes(10),
                ]
            );

            // Send OTP to email
            try {
                Mail::raw("Your OTP is: $otp", function ($message) {
                    $message->to($this->email)
                        ->subject('Your OTP for Login');
                });
                $this->isToggleOtp = true;
                $this->inputDisabled = true;
                $this->showOtpMessage = true;
                $this->resendOtpMessage = true;
            } catch (\Exception $e) {
                session()->flash('error', 'Failed to send OTP. Please try again.');
            }
        } else {
            session()->flash('error', 'Invalid email or password.');
        }
    }



    // Old working code 

    // public function generate(Request $request)
    // {
    //     $request->validate([
    //         'mobile' => 'required|exists:users,mobile'
    //     ]);
    
    //     // Generate OTP
    //     $verificationCode = $this->generateOtp($request->mobile);

    //             // // Flash OTP message

    //     $message = "Your OTP is: " . $verificationCode->otp;
    
    //     // Redirect to OTP verification page with mobile number
    //     return redirect()->route('otp.verification', ['user_id' => $verificationCode->user_id])->with('success',$message);
    // }
    
    // public function generateOtp($mobile)
    // {    
    //     $user = User::where('mobile', $mobile)->first(); // This line ensures that the user exists
    
    //     $verificationCode = VerificationCode::where('user_id', $user->id)->latest()->first();
    
    //     $now = Carbon::now();
    
    //     if($verificationCode && $now->isBefore($verificationCode->expire_at)){
    //         return $verificationCode;
    //     }
    
    //     return VerificationCode::create([
    //         'user_id'=>$user->id,
    //         'otp' => rand(111111,999999),
    //         'expire_at'=>Carbon::now()->addMinutes(1)
    //     ]);
    // }
    
    // public function verification($user_id){
    //     return view('home.otp-verification')->with([
    //         'user_id' => $user_id
    //     ]);
    // }

    // public function loginWithOtp(Request $request)
    // {
    //     $request->validate([
    //         'user_id' => 'required|exists:users,id',
    //         'otp' => 'required'
    //     ]);
    
    //     $verificationCode = VerificationCode::where('user_id', $request->user_id)
    //         ->where('otp', $request->otp)
    //         ->first();
    
    //     $now = Carbon::now();
    //     if (!$verificationCode) {
    //         return redirect()->back()->with('error', 'Your OTP is not correct');
    //     } elseif ($now->isAfter($verificationCode->expire_at)) {
    //         return redirect()->route('otp.login')->with('error', 'Your OTP has expired');
    //     }
    
    //     $user = User::whereId($request->user_id)->first();
    
    //     if ($user) {
    //         $verificationCode->update([
    //             'expire_at' => Carbon::now()
    //         ]);
    
    //         Auth::login($user);
    
    //         // Redirect based on isHirer status
    //         if ($user->isHirer == 1) {
    //             return redirect()->intended('/home-hirer');
    //         } else {
    //             return redirect()->intended('/add-candidate');
    //         }
    //     }
    
    //     return redirect()->route('otp.login')->with('error', 'Unable to log in. Please try again.');
    // }
    

    //  protected function createNewToken($token)
    // {
    //     return response()->json([
    //         'access_token' => $token,
    //         'token_type' => 'bearer',
    //         'expires_in' => auth()->factory()->getTTL() * 60,
    //         'user' => auth()->user()
    //     ]);
    // }


   

}
