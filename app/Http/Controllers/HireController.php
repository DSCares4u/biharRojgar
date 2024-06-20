<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
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
    } else {
          // Extract the first letter of the company name
            $companyName = $request->company_name;
            $firstLetter = strtoupper(substr(trim($companyName), 0, 1)); // Get the first letter and convert to uppercase

            // Create an image with the first letter
            $imgWidth = 100;
            $imgHeight = 100;
            $bgColor = '#ffffff'; // white background
            $textColor = '#000000'; // black text

            $image = Image::canvas($imgWidth, $imgHeight, $bgColor);
            $image->text($firstLetter, $imgWidth / 2, $imgHeight / 2, function($font) {
                $font->file(public_path('fonts/arial.ttf')); // Path to your font file
                $font->size(48);
                $font->color('#000000');
                $font->align('center');
                $font->valign('middle');
            });

            $logo = time() . ".png";
            $image->save(public_path("image/company/logo/") . $logo);
    }
    dd($logo);

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
        
    // public function hireUpdate(Request $request, int $id)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'date_of_start' => 'required',
    //         'city' => 'required|string',
    //         'state' => 'required|string',
    //         'description' => 'required|string',
    //         'company_name' => 'required|string',
    //         'website' => 'required|url',
    //         'mobile' => 'required|digits:10|regex:/^[0-9]{10}$/',
    //         'alt_mobile' => 'required|digits:10|regex:/^[0-9]{10}$/',
    //         'email' => 'required|string|email',
    //         'plan_id' => 'required|integer',
    //         'logo' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
    //         'profile' => 'required|string',
    //         'title' => 'required|string',
    //         'no_of_post' => 'required|integer|min:1',
    //         'min_experience' => 'required|integer|min:0',
    //         'max_experience' => 'required|integer|min:0',
    //         'gender' => 'required|string',
    //         'preferred_lang' => 'required|string',
    //         'type' => 'required|string',
    //         'qualification' => 'required|string',
    //         'min_salary' => 'required|integer|min:0',
    //         'max_salary' => 'required|integer|min:0',
    //     ]);
    
    //     if ($validator->fails()) {
    //         return response()->json([
    //             'status' => 422,
    //             'errors' => $validator->messages()
    //         ], 422);
    //     }
    
    //     $hire = Role::find($id);
    //     if (!$hire) {
    //         return response()->json([
    //             'status' => 404,
    //             'message' => 'No Hire Found'
    //         ], 404);
    //     }
    
    //     if ($request->hasFile('logo')) {
    //         $logo = time() . "." . $request->logo->extension();
    //         $request->logo->move(public_path("image/company/logo"), $logo);
    //         $hire->logo = $logo;
    //     }
    
    //     $hire->update([
    //         'date_of_start' => $request->date_of_start,
    //         'city' => $request->city,
    //         'state' => $request->state,
    //         'description' => $request->description,
    //         'company_name' => $request->company_name,
    //         'website' => $request->website,
    //         'mobile' => $request->mobile,
    //         'alt_mobile' => $request->alt_mobile,
    //         'email' => $request->email,
    //         'payment_mode' => $request->payment_mode,
    //         'hire_plan_id' => $request->plan_id,
    //     ]);
    //     $hire->roles()->update([
    //         'profile' => $input['profile'],
    //         'title' => $input['title'],
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
    
    //     return response()->json([
    //         'status' => 200,
    //         'message' => 'Hiring Updated Successfully'
    //     ], 200);
    // }
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
        'message' => 'Hiring Updated Successfully'
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