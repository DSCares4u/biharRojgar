<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
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
}
