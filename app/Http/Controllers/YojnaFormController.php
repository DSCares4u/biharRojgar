<?php

namespace App\Http\Controllers;

use App\Models\YojnaForm;
use Illuminate\Http\Request;
use Validator;

class YojnaFormController extends Controller
{
    public function index()
    {
        $yojna = YojnaForm::with("yojna")->orderBy('created_at', 'desc')->get();
        if ($yojna->count() > 0) {
            return response()->json([
                'status' => 200,
                'data' => $yojna
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
            'name' => 'required|string|min:3',
            'dob' => 'required',
            'mobile' => 'required|digits:10|regex:/^[0-9]{10}$/',
            'gender' => 'required',
            'email' => 'required|email',
            'city' => 'required',
            'state' => 'required',
            'pincode' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',  // Add validation for photo
            'id_proof' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',  // Add validation for photo
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }

        if ($request->hasFile('photo')) {
            $photo = "YJ" . time() . "." . $request->photo->extension();
            $request->photo->move(public_path("image/yojna/photo"), $photo);
        } else {
            return response()->json([
                'status' => 422,
                'errors' => ['photo' => 'Photo is required.']
            ], 422);
        }

        if ($request->hasFile('id_proof')) {
            $id_proof = "YJID" . time() . "." . $request->id_proof->extension();
            $request->id_proof->move(public_path("image/yojna/proof"), $id_proof);
        } else {
            return response()->json([
                'status' => 422,
                'errors' => ['id_proof' => 'Id Proof is required.']
            ], 422);
        }

        $yojna = YojnaForm::create([
            'name' => $request->name,
            'dob' => $request->dob,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'landmark' => $request->landmark,
            'gender' => $request->gender,
            'city' => $request->city,
            'state' => $request->state,
            'pincode' => $request->pincode,
            'village' => $request->village,
            'photo' => $photo,
            'id_proof' => $id_proof,
            'yojna_id' => $request->yojna_id
        ]);

        if ($yojna) {
            return response()->json([
                'status' => 200,
                'message' => "We Will Connect You Soon"
            ], 200);
        } else {
            return response()->json([
                'status' => 500,
                'message' => "Unable to add your Request"
            ], 500);
        }
    }

    public function getDistrictAndState(Request $request)
    {
        $pincode = $request->input('pincode');
        $response = Http::get('https://api.postalpincode.in/pincode/' . $pincode);

        if ($response->successful()) {
            $data = $response->json()[0];
            $district = $data['PostOffice'][0]['District'];
            $state = $data['PostOffice'][0]['State'];

            return response()->json([
                'district' => $district,
                'state' => $state,
            ]);
        } else {
            return response()->json([
                'error' => 'Failed to fetch data'
            ], $response->status());
        }
    }

    

    public function show($id)
    {
        $yojna = YojnaForm::find($id);
        if($yojna){
            return response()->json([
                'status' => 200,
                'data' => $yojna
            ], 200);
        }
        else{
            return response()->json([
                'status' => 404,
                'message' => "No Yojna Found"
            ], 404);
        }
    }

    public function update(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'ename' => 'required|string|min:3',
            'hname' => 'required|string|min:3',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->messages()
            ], 422);
        } else {
            $photo = "YJ". time() . "." . $request->photo->extension();        //upload on public/photo/image/filename
            $request->photo->move(public_path("image/yojna/photo"), $photo);  
    
            $document = "YJDOC". time() . "." . $request->document->extension();        //upload on public/photo/image/filename
            $request->document->move(public_path("image/yojna/document"), $document);      
    
            $yojna = YojnaForm::find($id);
            if ($yojna) {
                $yojna->update([
                    'name' => $request->name,
                    'father' => $request->father,
                    'mother' => $request->mother,
                    'dob' => $request->dob,
                    'mobile' => $request->mobile,
                    'email' => $request->email,
                    'address' => $request->address,
                    'gender' => $request->gender,
                    'photo'=>$photo,     
                    'document'=>$document,     
                    'yojna_id'=>$request->yojna_id                                                   
                ]);

                return response()->json([
                    'status' => 200,
                    'message' => "Yojna Updated Successfully"
                ], 200);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => "No Yojna Found"
                ], 500);
            }
        }
    }

    public function destroy($id)
    {
        $yojna  = YojnaForm::find($id);
        if($yojna){
            $yojna->delete();
            return response()->json([
                'status' => 200,
                'message' => "Yojna Deleted"
            ], 200);
        }
        else{
            return response()->json([
                'status' => 500,
                'message' => "No Yojna Found"
            ], 500);
        }       
    }
}
