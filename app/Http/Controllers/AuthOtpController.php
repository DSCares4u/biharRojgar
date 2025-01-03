<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\VerificationCode;
use Carbon\Carbon;

class AuthOtpController extends Controller
{

    public function login()
    {
    return view('home.otp-login');
    }

    public function generate(Request $request)
    {
        $request->validate([
            'mobile' => 'required|exists:users,mobile'
        ]);
    
        // Generate OTP
        $verificationCode = $this->generateOtp($request->mobile);

                // // Flash OTP message

        $message = "Your OTP is: " . $verificationCode->otp;
    
        // Redirect to OTP verification page with mobile number
        return redirect()->route('otp.verification', ['user_id' => $verificationCode->user_id])->with('success',$message);
    }
    
    public function generateOtp($mobile)
    {    
        $user = User::where('mobile', $mobile)->first(); // This line ensures that the user exists
    
        $verificationCode = VerificationCode::where('user_id', $user->id)->latest()->first();
    
        $now = Carbon::now();
    
        if($verificationCode && $now->isBefore($verificationCode->expire_at)){
            return $verificationCode;
        }
    
        return VerificationCode::create([
            'user_id'=>$user->id,
            'otp' => rand(111111,999999),
            'expire_at'=>Carbon::now()->addMinutes(1)
        ]);
    }
    
    public function verification($user_id){
        return view('home.otp-verification')->with([
            'user_id' => $user_id
        ]);
    }

    public function loginWithOtp(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'otp' => 'required'
        ]);
    
        $verificationCode = VerificationCode::where('user_id', $request->user_id)
            ->where('otp', $request->otp)
            ->first();
    
        $now = Carbon::now();
        if (!$verificationCode) {
            return redirect()->back()->with('error', 'Your OTP is not correct');
        } elseif ($now->isAfter($verificationCode->expire_at)) {
            return redirect()->route('otp.login')->with('error', 'Your OTP has expired');
        }
    
        $user = User::whereId($request->user_id)->first();
    
        if ($user) {
            $verificationCode->update([
                'expire_at' => Carbon::now()
            ]);
    
            Auth::login($user);
    
            // Redirect based on isHirer status
            if ($user->isHirer == 1) {
                return redirect()->intended('/home-hirer');
            } else {
                return redirect()->intended('/add-candidate');
            }
        }
    
        return redirect()->route('otp.login')->with('error', 'Unable to log in. Please try again.');
    }
    

     protected function createNewToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => auth()->user()
        ]);
    }


    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('home');
    }

}
