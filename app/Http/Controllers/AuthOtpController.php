<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\VerificationCode;
use Carbon\Carbon;

class AuthOtpController extends Controller
{

    public function login()
    {
    return view('home.otp-login');
    }

    public function generate(Request $request){
        $request->validate([
            'mobile'=>'required|exists:users,mobile'
        ]);

        // generate otp 
        $verificationCode = $this->generateOtp($request->mobile);

        // flash otp on screen

        $message = "Your Otp is - ".$verificationCode->otp;

        return redirect()->route("otp.verification")->with('success',$message);

    }

    public function generateOtp($mobile){
        $user = User::where('mobile',$mobile)->first();

        $verificationCode = VerificationCode::where('user_id',$user->id)->latest()->first();

        $now = Carbon::now();

        if($verificationCode && $now->isBefore($verificationCode->expire_at)){
            return $verificationCode;
        }

        return VerificationCode::create([
            'user_id'=>$user->id,
            'otp' => rand(111111,999999),
            'expire_at'=>Carbon::now()->addMinutes(10)

        ]);

    }
}
