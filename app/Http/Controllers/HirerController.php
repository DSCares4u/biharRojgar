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
    public function profilePage()
    {
        $user = Auth::user();

        if ($user && $user->isHirer == 1) {
            $data = Hire::with('hire_plan')->where('user_id', $user->id)->first();
            return view('hirer.profile', ['data' => $data]);
        }
        return redirect()->route('home')->with('error', 'You are not authorized to view this page.');
    }

    public function hirerHome()
    {
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

    public function insertJobRolePage()
    {
        return view('hirer.insertJobPost');
    }

    public function insertJobRole(Request $request)
    {

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
            $hirerId = Hire::where('user_id', $user->id)->first();
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
            if ($role) {
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
        } else {
            return view('hirer.editJobPost', ['job' => $role]);
        }
    }

    public function updateJobRole(Request $request, int $id)
    {

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

            if ($role) {
                return redirect('/hirer/job-post')->with('success', 'Role data updated successfully!');
            }
            return redirect()->back()->with('error', 'Something went wrong! Please try again later.');
        }
        return redirect('')->with('error', 'You are not authorized to view this page.');
    }

    public function showApplication($id)
    {
        $application = Job::with('user', 'role', 'candidate', 'address', 'document')->where('id', $id)->first();
        if (!$application) {
            return redirect()->back()->with('error', 'Application not found');
        } else {
            return view('hirer.editApplication', ['data' => $application]);
        }
    }

    public function updateApplication(Request $request, int $id)
    {

        $validator = Validator::make($request->all(), [
            'profile' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = Auth::user();

        if ($user->isHirer == 1) {
            // $hirerId = Hire::where('user_id',$user->id)->first();

            $job = Job::find($id);
            if (!$job) {
                return redirect()->back()->with('error', 'Data not found');
            }

            $job->update([
                'profile' => $request->profile,

            ]);

            if ($job) {
                return redirect('/hirer/applications')->with('success', 'Application updated successfully!');
            }
            return redirect()->back()->with('error', 'Something went wrong! Please try again later.');
        }
        return redirect('')->with('error', 'You are not authorized to view this page.');
    }

    public function hirerPlans()
    {
        return view('hirer.plans');
        // $user = Auth::user();

        // if ($user->isHirer == 1) {

        //     // Get the hirer details and their roles
        //     $hire = Hire::with('roles')->where('user_id', $user->id)->first();

        //     if (!$hire) {
        //         return redirect()->route('home')->with('error', 'Hirer information not found.');
        //     }

        //     // Get all role IDs for the hirer
        //     $roleIds = Role::where('hire_id', $hire->id)->pluck('id')->toArray();

        //     // Fetch all jobs matching any of the role IDs
        //     $jobs = Job::with('user', 'role', 'candidate', 'address', 'document')
        //         ->whereIn('role_id', $roleIds)
        //         ->orderBy('created_at', 'desc')
        //         ->get();

        //     return view('hirer.applications', ['applications' => $jobs]);
        // }

        // return redirect()->route('home')->with('error', 'You are not authorized to view this page.');
    }

    public function applications()
    {
        $user = Auth::user();

        if ($user->isHirer == 1) {

            // Get the hirer details and their roles
            $hire = Hire::with('roles')->where('user_id', $user->id)->first();

            if (!$hire) {
                return redirect()->route('home')->with('error', 'Hirer information not found.');
            }

            // Get all role IDs for the hirer
            $roleIds = Role::where('hire_id', $hire->id)->pluck('id')->toArray();

            // Fetch all jobs matching any of the role IDs
            $jobs = Job::with('user', 'role', 'candidate', 'address', 'document')
                ->whereIn('role_id', $roleIds)
                ->orderBy('created_at', 'desc')
                ->get();

            return view('hirer.applications', ['applications' => $jobs]);
        }

        return redirect()->route('home')->with('error', 'You are not authorized to view this page.');
    }
    public function pendingApplications()
    {
        $user = Auth::user();

        if ($user->isHirer == 1) {

            // Get the hirer details and their roles
            $hire = Hire::with('roles')->where('user_id', $user->id)->first();

            if (!$hire) {
                return redirect()->route('home')->with('error', 'Hirer information not found.');
            }

            // Get all role IDs for the hirer
            $roleIds = Role::where('hire_id', $hire->id)->pluck('id')->toArray();

            // Fetch all jobs matching any of the role IDs
            $jobs = Job::with('user', 'role', 'candidate', 'address', 'document')
                ->whereIn('role_id', $roleIds)
                ->orderBy('created_at', 'desc')
                ->get();

            return view('hirer.pending-applications', ['applications' => $jobs]);
        }

        return redirect()->route('home')->with('error', 'You are not authorized to view this page.');
    }

    public function updateRemarks(Request $request, int $id)
    {
        $job = Job::find($id);
        if ($job) {
            $data = $job->update([
                'remarks' => $request->remarks,
            ]);
            // dd($data);
            if ($data) {
                return response()->json([
                    'status' => 200,
                    'message' => "Updated Successfully"
                ], 200);
            }
        }
        return response()->json([
            'status' => 400,
            'message' => "Error Updating Data"
        ], 400);
    }


    public function rejectedApplications()
    {
        $user = Auth::user();

        if ($user->isHirer == 1) {

            // Get the hirer details and their roles
            $hire = Hire::with('roles')->where('user_id', $user->id)->first();

            if (!$hire) {
                return redirect()->route('home')->with('error', 'Hirer information not found.');
            }

            // Get all role IDs for the hirer
            $roleIds = Role::where('hire_id', $hire->id)->pluck('id')->toArray();

            // Fetch all jobs matching any of the role IDs
            $jobs = Job::with('user', 'role', 'candidate', 'address', 'document')
                ->whereIn('role_id', $roleIds)
                ->orderBy('created_at', 'desc')
                ->get();

            return view('hirer.rejected-applications', ['applications' => $jobs]);
        }

        return redirect()->route('home')->with('error', 'You are not authorized to view this page.');
    }

    public function updateJobStatus(Request $request, int $id)
    {
        $jobStatus = Role::find($id);
        if (!$jobStatus) {
            return redirect()->back()->with('error', 'Role not found');
        }

        $jobStatus->update([
            'status' => $request->status
        ]);

        if ($jobStatus) {
            return redirect('/hirer/applications')->with('success', 'Data updated successfully!');
        }
        return redirect()->back()->with('error', 'Something went wrong! Please try again later.');
    }
}
