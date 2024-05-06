<?php

namespace App\Http\Controllers;

use App\Models\Admin;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function manageJob(){
        return view('admin.manageJob');
    }

    public function insertJob(){
        return view('admin.insertCandidate');
    }
}
