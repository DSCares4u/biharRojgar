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

    public function generate(Request $request)
    {
        // $request->validate([
        //     'mobile' => 'required|exists:users,mobile'
        // ]);
    
        // // Find the user
        // $user = User::where('mobile', $request->mobile)->firstOrFail();
    
        // // Generate OTP
        // $verificationCode = $this->generateOtp($user);
    
        // // Flash OTP message
        // $message = "Your OTP is: " . $verificationCode->otp;
    
        // return redirect()->route("otp.login")->with('success', $message);


        $request->validate([
            'mobile' => 'required|exists:users,mobile'
        ]);
    
        // Generate OTP
        $verificationCode = $this->generateOtp($request->mobile);
    
        // Redirect to OTP verification page with mobile number
        return redirect()->route('verify.otp', ['mobile' => $request->mobile]);
    

    }
    
    public function generateOtp($user)
    {
        // Check if there's a valid OTP for the user
    //     $verificationCode = VerificationCode::where('user_id', $user->id)
    //         ->latest()
    //         ->first();
    
    //     $now = Carbon::now();
    
    //     if ($verificationCode && $now->isBefore($verificationCode->expire_at)) {
    //         return $verificationCode;
    //     }
    
    //     // Generate new OTP
    //     $otp = rand(111111, 999999);
    
    //     // Save OTP to the database
    //     return VerificationCode::create([
    //         'user_id' => $user->id,
    //         'otp' => $otp,
    //         'expire_at' => Carbon::now()->addMinutes(10)
    //     ]);
    
        $user = User::where('mobile', $mobile)->firstOrFail(); // This line ensures that the user exists
    
        $verificationCode = VerificationCode::where('user_id', $user->id)->latest()->first();
    
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
    


    // In YourController.php

public function verify(Request $request)
{
    $request->validate([
        'mobile' => 'required|exists:users,mobile',
        'otp' => 'required'
    ]);

    $user = User::where('mobile', $request->mobile)->first();
    $verificationCode = VerificationCode::where('user_id', $user->id)
        ->where('otp', $request->otp)
        ->where('expire_at', '>', now())
        ->latest()
        ->first();

    if ($verificationCode) {
        // Perform login or other actions upon successful OTP verification
        return redirect()->route('dashboard')->with('success', 'OTP verified successfully.');
    }

    return back()->withErrors(['otp' => 'Invalid OTP. Please try again.']);
}

public function showVerificationPage($mobile)
{
    return view('verification', compact('mobile'));
}

    
}
