<?php

namespace App\Http\Controllers;

use App\Models\Hire;
use App\Models\Role;
use App\Models\HirePlan;
use Illuminate\Http\Request;
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
        'website' => 'required|url',
        'mobile' => 'required|digits:10|regex:/^[0-9]{10}$/',
        'alt_mobile' => 'required|digits:10|regex:/^[0-9]{10}$/',
        'email' => 'required|string',
        'plan_id' => 'required',
        'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
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
    } else {
        return response()->json([
            'status' => 422,
            'errors' => ['logo' => 'Logo is required.']
        ], 422);
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

        return response()->json([
            'status' => 200,
            'message' => "We Will Connect You Soon"
        ], 200);
    }

    return response()->json([
        'status' => 500,
        'message' => "Unable to add your Request"
    ], 500);
}


    public function show($id)
    {
        $hire = Hire::find($id);
        if($hire){
            return response()->json([
                'status' => 200,
                'data' => $hire
            ], 200);
        }
        else{
            return response()->json([
                'status' => 404,
                'message' => "No call Found"
            ], 404);
        }
    }
        
    // public function update(Request $request, int $id)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string|min:3',
    //         'date_of_start' => 'required',
    //         'city' => 'required|string',
    //         'state' => 'required|string',
    //         'description' => 'required|string',
    //         'company_name' => 'required|string',
    //         'website' => 'required|url',
    //         'mobile' => 'required|digits:10|regex:/^[0-9]{10}$/',
    //         'alt_mobile' => 'required|digits:10|regex:/^[0-9]{10}$/',
    //         'email' => 'required|string',
    //         'plan_id' => 'required',
    //         'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
    //         'inputs' => 'required|array', // Ensure inputs is an array
    //         'inputs.*.profile' => 'required|string',
    //         'inputs.*.no_of_post' => 'required|integer|min:1',
    //         'inputs.*.min_experience' => 'required|integer|min:0',
    //         'inputs.*.max_experience' => 'required|integer|min:0',
    //         'inputs.*.gender' => 'required|string',
    //         'inputs.*.preferred_lang' => 'required|string',
    //         'inputs.*.type' => 'required|string',
    //         'inputs.*.qualification' => 'required|string',
    //         'inputs.*.min_salary' => 'required|integer|min:0',
    //         'inputs.*.max_salary' => 'required|integer|min:0',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json([
    //             'status' => 422,
    //             'error' => $validator->messages()
    //         ], 422);
    //     }
        
    //     else {

    //         if ($request->hasFile('logo')) {
    //             $logo = time() . "." . $request->logo->extension();
    //             $request->logo->move(public_path("image/company/logo"), $logo);
    //         } else {
    //             return response()->json([
    //                 'status' => 422,
    //                 'errors' => ['logo' => 'Logo is required.']
    //             ], 422);
    //         }

    //         $hire = Hire::find($id);
    //         if ($hire) {
    //             $hire->update([
    //                 'name' => $request->name,
    //                 'date_of_start' => $request->date_of_start,
    //                 'city' => $request->city,
    //                 'state' => $request->state,
    //                 'description' => $request->description,
    //                 'company_name' => $request->company_name,
    //                 'website' => $request->website,
    //                 'mobile' => $request->mobile,
    //                 'alt_mobile' => $request->alt_mobile,
    //                 'email' => $request->email,
    //                 'payment_mode' => $request->payment_mode,
    //                 'hire_plan_id' => $request->plan_id,
    //                 'isApproved' => $request->isApproved,
    //                 'logo' => $logo,                    
    //             ]);
    //             if ($hire) {
    //                 foreach ($request->inputs as $input) {
    //                     $hire->roles()->create([
    //                         'profile' => $input['profile'],
    //                         'no_of_post' => $input['no_of_post'],
    //                         'min_experience' => $input['min_experience'],
    //                         'max_experience' => $input['max_experience'],
    //                         'gender' => $input['gender'],
    //                         'preferred_lang' => $input['preferred_lang'],
    //                         'type' => $input['type'],
    //                         'qualification' => $input['qualification'],
    //                         'min_salary' => $input['min_salary'],
    //                         'max_salary' => $input['max_salary']
    //                     ]);
    //                 }
            
    //                 return response()->json([
    //                     'status' => 200,
    //                     'message' => "We Will Connect You Soon"
    //                 ], 200);
    //             }

    //             return response()->json([
    //                 'status' => 200,
    //                 'message' => "Hiring Updated Successfully"
    //             ], 200);
    //         } else {
    //             return response()->json([
    //                 'status' => 500,
    //                 'message' => "No Hire Found"
    //             ], 500);
    //         }
    //     }
    // }

    public function update(Request $request, int $id)
{
    $validator = Validator::make($request->all(), [
        // 'name' => 'required|string|min:3',
        // 'date_of_start' => 'required|date',
        // 'city' => 'required|string',
        // 'state' => 'required|string',
        // 'description' => 'required|string',
        // 'company_name' => 'required|string',
        // 'website' => 'required|url',
        // 'mobile' => 'required|digits:10|regex:/^[0-9]{10}$/',
        // 'alt_mobile' => 'required|digits:10|regex:/^[0-9]{10}$/',
        // 'email' => 'required|email',
        // 'plan_id' => 'required|integer',
        // 'logo' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        // 'inputs' => 'required|array',
        // 'inputs.*.profile' => 'required|string',
        // 'inputs.*.no_of_post' => 'required|integer|min:1',
        // 'inputs.*.min_experience' => 'required|integer|min:0',
        // 'inputs.*.max_experience' => 'required|integer|min:0',
        // 'inputs.*.gender' => 'required|string',
        // 'inputs.*.preferred_lang' => 'required|string',
        // 'inputs.*.type' => 'required|string',
        // 'inputs.*.qualification' => 'required|string',
        // 'inputs.*.min_salary' => 'required|integer|min:0',
        // 'inputs.*.max_salary' => 'required|integer|min:0',
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
            'message' => 'Hire record not found'
        ], 404);
    }

    if ($request->hasFile('logo')) {
        $logo = time() . "." . $request->logo->extension();
        $request->logo->move(public_path("image/company/logo"), $logo);
    } else {
        $logo = $hire->logo; // Use the existing logo if not provided
    }

    $hire->update([
        // 'name' => $request->name,
        // 'date_of_start' => $request->date_of_start,
        // 'city' => $request->city,
        // 'state' => $request->state,
        // 'description' => $request->description,
        // 'company_name' => $request->company_name,
        // 'website' => $request->website,
        // 'mobile' => $request->mobile,
        // 'alt_mobile' => $request->alt_mobile,
        // 'email' => $request->email,
        // 'payment_mode' => $request->payment_mode,
        // 'hire_plan_id' => $request->plan_id,
        'isApproved' => $request->isApproved,
        // 'logo' => $logo,
    ]);

    // foreach ($request->inputs as $input) {
    //     $hire->roles()->create([
    //         'profile' => $input['profile'],
    //         'no_of_post' => $input['no_of_post'],
    //         'min_experience' => $input['min_experience'],
    //         'max_experience' => $input['max_experience'],
    //         'gender' => $input['gender'],
    //         'preferred_lang' => $input['preferred_lang'],
    //         'type' => $input['type'],
    //         'qualification' => $input['qualification'],
    //         'min_salary' => $input['min_salary'],
    //         'max_salary' => $input['max_salary']
    //     ]);
    // }

    return response()->json([
        'status' => 200,
        'message' => 'Hiring updated successfully'
    ], 200);
}


    public function destroy($id)
    {
        $hire  = Hire::find($id);
        if($hire){
            $hire->delete();
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
}