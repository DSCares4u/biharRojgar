<?php

namespace App\Http\Controllers;

use App\Models\Admin;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function manageCandidate(){
        return view('admin.manageCandidate');
    }

    public function insertCandidate(){
        return view('admin.insertCandidate');
    }
}
