<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function getJob(){
        return view('home.getJob');
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

    public function hireTC(){
        return view('home.hireT&C');
    }
}
