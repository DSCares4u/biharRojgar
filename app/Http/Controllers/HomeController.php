<?php

namespace App\Http\Controllers;
use App\Models\Role;
use App\Models\SarkariJob;
use App\Models\Yojna;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function profile(){
        return view('home.profile');
    }

    public function register(){
        return view('home.register');
    }

    public function login(){
        return view('home.login');
    }

    public function getJobTC(){
        return view('home.getJobT&C');
    }

    public function hire(){
        return view('home.hire');
    }

    public function hirepayLater(){
        return view('home.hirePayLater');
    }

    public function hireTC(){
        return view('home.hireT&C');
    }

    public function addCandidate(){
        return view('home.addCandidate');
    }

    public function address(){
        return view('home.address');
    }

    public function documents(){
        return view('home.documents');
    }

    public function sarkariJob(){
        return view('home.sarkariJob');
    }

    public function jobAppForms(){
    return view('home.jobAppForms');
    }

    public function privateJob(){
        return view('home.privateJob');
    }

    public function sarkariJobApplyForm(){
        return view('home.sarkariJobApplyForm');
    }

    public function sarkariJobConfirm(){
        return view('home.sarkariJobConfirm');
    }

    public function privateJobConfirm(){
        return view('home.privateJobConfirm');
    }

    public function viewSarkariJobForm(){
        return view('home.viewSarkariJobForm');
    }

    public function viewPrivateJobForm(){
        return view('home.viewPrivateJobForm');
    }

    public function manualForm(){
        return view('home.manualForm');
    }

    public function sarkariYojna(){
        return view('home.sarkariYojna');
    }

    public function sarkariYojnaForm(){
        return view('home.sarkariYojnaForm');
    }

    public function search(Request $request)
{
    $query = $request->input('search');

    // Example search for Sarkari Jobs, Private Jobs, and Yojnas
    $sarkariJobs = SarkariJob::where('name', 'like', "%{$query}%")->get(['id', 'name']);
    $privateJobs = Role::where('title', 'like', "%{$query}%")->get(['id', 'title']);
    $yojnas = Yojna::where('ename', 'like', "%{$query}%")->get(['id', 'ename']);

    // Return results in JSON format
    return response()->json([
        'sarkariJobs' => $sarkariJobs,
        'privateJobs' => $privateJobs,
        'yojnas' => $yojnas,
    ]);
}


}
