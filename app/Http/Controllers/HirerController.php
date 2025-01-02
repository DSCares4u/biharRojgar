<?php

namespace App\Http\Controllers;
use App\Models\Hire;
use App\Models\Job;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HirerController extends Controller
{
    public function hirerHome(){
        return view('hirer.home');
    }

    public function hirerJob()
    {
        $user = Auth::user();
    
        // Ensure the authenticated user is a hirer
        if ($user && $user->isHirer == 1) {
            $job = Hire::with('roles')->where('mobile', $user->mobile)->first();
            return view('hirer.jobPost', ['job' => $job]);
        }
    
        // Handle cases where the user is not a hirer
        return redirect()->route('home')->with('error', 'You are not authorized to view this page.');
    }
    

    // public function applications()
    // {
    //     $user = Auth::user();

    //     if ($user && $user->isHirer == 1) {
    //         $hire = Hire::with('roles')->where('user_id', $user->id)->first();

    //         $roles = $hire['roles'];

    //         foreach ($roles as $role){

    //             $applications = Job::with('user','role','candidate','address','document')->where('role_id', $role->id)->get();

    //             return view('hirer.applications', ['applications' => $applications]);
    //         }
    //     }

    //     // Handle cases where the user is not a hirer
    //     return redirect()->route('home')->with('error', 'You are not authorized to view this page.');
    // }

    public function applications()
    {
        $user = Auth::user();

        if ($user && $user->isHirer == 1) {
            $hire = Hire::with('roles.jobs')->where('user_id', $user->id)->first();
    
            if ($hire) {
                // Retrieve all jobs for this hirer
                // $applications = $hire->roles->flatMap(function ($role) {
                //     return $role->jobs;
                // });
    
                return view('hirer.applications', ['applications' => $hire]);
            }
        }

        // Handle cases where the user is not a hirer
        return redirect()->route('home')->with('error', 'You are not authorized to view this page.');
    }


}
