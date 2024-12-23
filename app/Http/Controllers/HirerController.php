<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HirerController extends Controller
{
    public function hirerHome(){
        return view('hirer.home');
    }

    public function hirerJob(){
        return view('hirer.jobPost');
    }

    public function applications(){
        return view('hirer.applications');
    }
}
