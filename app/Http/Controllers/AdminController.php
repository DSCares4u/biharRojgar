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

    public function manageHire(){
        return view('admin.manageHire');
    }

    public function insertHire(){
        return view('admin.insertHire');
    }

    public function insertHirePlan(){
        return view('admin.insertHirePlan');
    }

    public function manageHirePlan(){
        return view('admin.manageHirePlan');
    }
}
