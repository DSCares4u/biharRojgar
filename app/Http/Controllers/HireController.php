<?php

namespace App\Http\Controllers;

use App\Models\Hire;
use App\Models\Role;
use App\Models\User;
use App\Models\HirePlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class HireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hire = Hire::with("hire_plan")->orderBy('created_at', 'desc')->get();
        if ($hire->count() > 0) {
            return response()->json([
                'status' => 200,
                'data' => $hire
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'data' => "No Records found"
            ], 404);
        }
    }
    
    public function roleIndex(){
        $role = Role::with("hire")->orderBy('created_at', 'desc')->get();
        // $role = Role::with("hire")->inRandomOrder()->get();
        if ($role->count() > 0) {
            return response()->json([
                'status' => 200,
                'data' => $role
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'data' => "No Records found"
            ], 404);
        }
    }

    public function homeRoleIndex(){
        $role = Role::with("hire")->where('status',1)->orderBy('created_at', 'desc')->get();
        // $role = Role::with("hire")->inRandomOrder()->get();
        if ($role->count() > 0) {
            return response()->json([
                'status' => 200,
                'data' => $role
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
        'date_of_start' => 'required',
        'city' => 'required|string',
        'state' => 'required|string',
        'description' => 'required|string',
        'company_name' => 'required|string',
        'mobile' => 'required|digits:10|regex:/^[0-9]{10}$/',
        'plan_id' => 'required',
        'inputs' => 'required|array', // Ensure inputs is an array
        'inputs.*.profile' => 'required|string',
        'inputs.*.title' => 'required|string',
        'inputs.*.no_of_post' => 'required|integer|min:1',
        'inputs.*.min_experience' => 'required|integer|min:0',
        'inputs.*.max_experience' => 'required|integer|min:0',
        'inputs.*.gender' => 'required|string',
        'inputs.*.preferred_lang' => 'required|string',
        'inputs.*.type' => 'required|string',
        'inputs.*.qualification' => 'required|string',
        'inputs.*.min_salary' => 'required|integer|min:0',
        'inputs.*.max_salary' => 'required|integer|min:0',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 422,
            'errors' => $validator->messages()
        ], 422);
    }

    if ($request->hasFile('logo')) {
        $logo = time() . "." . $request->logo->extension();
        $request->logo->move(public_path("image/company/logo"), $logo);
    }
    else{
        $logo = NULL;
    }

    $hire = Hire::create([
        'date_of_start' => $request->date_of_start,
        'city' => $request->city,
        'state' => $request->state,
        'description' => $request->description,
        'company_name' => $request->company_name,
        'website' => $request->website,
        'mobile' => $request->mobile,
        'alt_mobile' => $request->alt_mobile,
        'email' => $request->email,
        'payment_mode' => $request->payment_mode,
        'hire_plan_id' => $request->plan_id,
        'logo' => $logo,
    ]);

    if ($hire) {
        foreach ($request->inputs as $input) {
            $hire->roles()->create([
                'profile' => $input['profile'],
                'title' => $input['title'],
                'no_of_post' => $input['no_of_post'],
                'min_experience' => $input['min_experience'],
                'max_experience' => $input['max_experience'],
                'gender' => $input['gender'],
                'preferred_lang' => $input['preferred_lang'],
                'type' => $input['type'],
                'qualification' => $input['qualification'],
                'min_salary' => $input['min_salary'],
                'max_salary' => $input['max_salary']
            ]);
        }

        $user = User::create([
            'name' => $request->company_name,
            'mobile' => $request->mobile,
            'isHirer' => 1,
            'email' => $request->email,
        ]);

        if($user){
            $hire->update([
                'user_id' => $user->id,
            ]);
        }

        return response()->json([
            'status' => 200,
            'message' => "We Will Connect You Soon"
        ], 200);
    }
    else{
        return response()->json([
            'status' => 500,
            'message' => "Unable to add your Request"
        ], 500);
    }    
}

public function roleShow($id)
{
    $role = Role::find($id);
    if($role){
        $role = Role::with("hire")->where('id', $id)->first();
        return response()->json([
            'status' => 200,
            'data' => $role
        ], 200);
    }
    else{
        return response()->json([
            'status' => 404,
            'message' => "No Role Found"
        ], 404);
    }
}

    public function show($id)
    {
        $hire = Hire::find($id);
        if($hire){
            $hire = Hire::with("hire_plan")->where('id', $id)->first();
            return response()->json([
                'status' => 200,
                'data' => $hire
            ], 200);
        }
        else{
            return response()->json([
                'status' => 404,
                'message' => "No Role Found"
            ], 404);
        }
    }
        
    public function hireUpdate(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'city' => 'required|string',
            'state' => 'required|string',
            'description' => 'required|string',
            'company_name' => 'required|string',
            'mobile' => 'required|digits:10|regex:/^[0-9]{10}$/',
            'plan_id' => 'required',
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }
    
        $hire = Hire::find($id);
        if (!$hire) {
            return response()->json([
                'status' => 404,
                'message' => 'No Hire Found'
            ], 404);
        }
    
        if ($request->hasFile('logo')) {
            $logo = time() . "." . $request->logo->extension();
            $request->logo->move(public_path("image/company/logo"), $logo);
        }
        else{
            $logo = NULL;
        }
        
        $hire->update([
            'city' => $request->city,
            'state' => $request->state,
            'description' => $request->description,
            'company_name' => $request->company_name,
            'website' => $request->website,
            'mobile' => $request->mobile,
            'alt_mobile' => $request->alt_mobile,
            'email' => $request->email,
            'payment_mode' => $request->payment_mode,
            'hire_plan_id' => $request->plan_id,
            'logo' => $logo,
        ]);
    
        return response()->json([
            'status' => 200,
            'message' => 'Hiring Company Updated Successfully'
        ], 200);
    }


    public function roleUpdate(Request $request, int $id)
{
    $validator = Validator::make($request->all(), [
        'profile' => 'required|string',
        'title' => 'required|string',
        'no_of_post' => 'required|integer|min:1',
        'min_experience' => 'required|integer|min:0',
        'max_experience' => 'required|integer|min:0',
        'gender' => 'required|string',
        'preferred_lang' => 'required|string',
        'type' => 'required|string',
        'qualification' => 'required|string',
        'min_salary' => 'required|integer|min:0',
        'max_salary' => 'required|integer|min:0',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 422,
            'errors' => $validator->messages()
        ], 422);
    }

    $hire = Role::find($id);
    if (!$hire) {
        return response()->json([
            'status' => 404,
            'message' => 'No Hire Found'
        ], 404);
    }

    $hire->update([
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
        'isApproved'=> $request->isApproved,
    ]);

    return response()->json([
        'status' => 200,
        'message' => 'Data Updated Successfully'
    ], 200);
}

    public function updateStatus(Request $request, int $id){
        $job = Role::find($id);
            if($job){
            $data = $job->update([
                'status' => $request->status,   
            ]);
            // dd($data);
            if($data){
                return response()->json([
                    'status' => 200,
                    'message' => "Updated Successfully"
                ], 200);
            }
        }
        return response()->json([
            'status' => 400,
            'message' => "Error Updating Job Status"
        ], 400);
    }



    // public function destroy($id)
    // {
    //     $hire  = Hire::find($id);
    //     if($hire){
    //         $hire->delete();
    //         return response()->json([
    //             'status' => 200,
    //             'message' => "Hire Deleted"
    //         ], 200);
    //     }
    //     else{
    //         return response()->json([
    //             'status' => 500,
    //             'message' => "No Hire Found"
    //         ], 500);
    //     }       
    // }

    public function destroy($id){
        $hire = Hire::find($id);

        if ($hire) {
            $roleId = $hire->role_id;

            dd($roleId);
                $hire->delete();
                if ($roleId) {
                Role::destroy($roleId);
            }
    
            return response()->json([
                'status' => 200,
                'message' => "Hire and associated Role Deleted"
            ], 200);
        } else {
            return response()->json([
                'status' => 500,
                'message' => "No Hire Found"
            ], 500);
        }
    }


    public function destroyRole($id)
    {
        $hire  = Role::find($id);
        if($hire){
            $hire->delete();
            return response()->json([
                'status' => 200,
                'message' => "Role Deleted"
            ], 200);
        }
        else{
            return response()->json([
                'status' => 500,
                'message' => "No Role Found"
            ], 500);
        }       
    }

    public function roleRestore($id)
    {
        $data = Role::onlyTrashed()->findOrFail($id);
        $data->restore();

        return response()->json([
            'success' => true,
            'message' => 'Role restored successfully'
        ]);
    }

    public function roleTrash()
    {
         $data = Role::onlyTrashed()->get();
         return response()->json([
             'success' => true,
             'data' => $data
         ]);
    }

    public function roleForceDelete($id)
    {
        $data = Role::onlyTrashed()->findOrFail($id);
        $data->forceDelete();

        return response()->json([
            'success' => true,
            'message' => 'Role permanently deleted'
        ]); 
   }

    public function restore($id)
    {
        $data = Hire::onlyTrashed()->findOrFail($id);
        $data->restore();

        return response()->json([
            'success' => true,
            'message' => 'Hire Company restored successfully'
        ]);
    }

    public function trash()
    {
         $data = Hire::onlyTrashed()->get();
         return response()->json([
             'success' => true,
             'data' => $data
         ]);
    }

    public function forceDelete($id)
    {
        $data = Hire::onlyTrashed()->findOrFail($id);
        $data->forceDelete();

        return response()->json([
            'success' => true,
            'message' => 'Hire Company permanently deleted'
        ]); 
   }
}