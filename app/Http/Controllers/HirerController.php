<?php

namespace App\Http\Controllers;
use App\Models\Hire;
use App\Models\Job;
use App\Models\Role;
use Illuminate\Http\Request;
use Validator;
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
            $job = Hire::with('roles')->where('user_id', $user->id)->first();
            return view('hirer.jobPost', ['job' => $job]);
        }
    
        // Handle cases where the user is not a hirer
        return redirect()->route('home')->with('error', 'You are not authorized to view this page.');
    }

    public function insertJobRolePage(){
        return view('hirer.insertJobPost');
    }

    public function insertJobRole(Request $request){

        $validator = Validator::make($request->all(), [
            'profile' => 'required',
            'title' => 'required',
            'no_of_post' => 'required',
            'min_experience' => 'required',
            'min_salary' => 'required',
            'max_experience' => 'required',
            'max_salary' => 'required',
            'gender' => 'required',
            'preferred_lang' => 'required',
            'type' => 'required',
            'qualification' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = Auth::user();

        if ($user->isHirer == 1) {
            $hirerId = Hire::where('user_id',$user->id)->first();
            $role = Role::create([
                'profile' => $request->profile,
                'title' => $request->title,
                'no_of_post' => $request->no_of_post,
                'min_experience' => $request->min_experience,
                'max_experience' => $request->max_experience,
                'gender' => $request->gender,
                'preferred_lang' => $request->preferred_lang,
                'type' => $request->type,
                'qualification' => $request->qualification,
                'max_salary' => $request->max_salary,
                'min_salary' => $request->min_salary,
                'isApproved' => 1,
                'status' => 1,
                'hire_id' => $hirerId->id,
            ]);
            if($role){
                return redirect('/hirer/job-post')->with('success', 'Details submitted successfully!');    
            }
            return redirect()->back()->with('error', 'Something went wrong! Please try again later.');

        }
        return redirect('')->with('error', 'You are not authorized to view this page.');
    }

    public function showJobRole($id)
    {
        $role = Role::find($id);
        if (!$role) {
            return redirect()->back()->with('error', 'Role not found');
        }
        else{
            return view('hirer.editJobPost', ['role',$role]);
        }
    }

    public function updateJobRole(Request $request, int $id){

        $validator = Validator::make($request->all(), [
            'profile' => 'required',
            'title' => 'required',
            'no_of_post' => 'required',
            'min_experience' => 'required',
            'min_salary' => 'required',
            'max_experience' => 'required',
            'max_salary' => 'required',
            'gender' => 'required',
            'preferred_lang' => 'required',
            'type' => 'required',
            'qualification' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = Auth::user();

        if ($user->isHirer == 1) {
            // $hirerId = Hire::where('user_id',$user->id)->first();

            $role = Role::find($id);
            if (!$role) {
                return redirect()->back()->with('error', 'Role not found');
            }

            $role->update([
                'profile' => $request->profile,
                'title' => $request->title,
                'no_of_post' => $request->no_of_post,
                'min_experience' => $request->min_experience,
                'max_experience' => $request->max_experience,
                'gender' => $request->gender,
                'preferred_lang' => $request->preferred_lang,
                'type' => $request->type,
                'qualification' => $request->qualification,
                'min_salary' => $request->min_salary,
                'max_salary' => $request->max_salary,
            ]);

            if($role){
                return redirect('/hirer/job-post')->with('success', 'Role data updated successfully!');    
            }
            return redirect()->back()->with('error', 'Something went wrong! Please try again later.');

        }
        return redirect('')->with('error', 'You are not authorized to view this page.');
    }

    public function applications()
    {
        $user = Auth::user();

        if ($user->isHirer == 1) {

            $hireId = Hire::with('roles')->where('user_id', $user->id)->first();

            $roleId = Role::where('hire_id',$hireId->id)->get();
            
            // $job = Job::with('user','role','candidate','address','document')->where('role_id',$roleId->id)->orderBy('created_at', 'desc')->get();

            // if ($hire) {
                // Retrieve all jobs for this hirer
                // $applications = $hire->roles->flatMap(function ($role) {
                //     return $role->jobs;
                // });
    
                return view('hirer.applications', ['applications' => $roleId]);
            // }
        }

        // Handle cases where the user is not a hirer
        // return redirect()->route('home')->with('error', 'You are not authorized to view this page.');
    }

    


}
