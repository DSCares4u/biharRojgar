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

    public function editHire(){
        return view('admin.editHire');
    }

    public function insertHirePlan(){
        return view('admin.insertHirePlan');
    }

    public function manageHirePlan(){
        return view('admin.manageHirePlan');
    }

    public function manageYojna(){
        return view('admin.manageYojna');
    }

    public function insertYojna(){
        return view('admin.insertYojna');
    }

    public function editYojna(){
        return view('admin.editYojna');
    }

    public function manageYojnaCategory(){
        return view('admin.manageYojnaCategory');
    }

    public function insertYojnaCategory(){
        return view('admin.insertYojnaCategory');
    }

    public function manageSarkariJob(){
        return view('admin.manageSarkariJob');
    }

    public function insertSarkariJob(){
        return view('admin.insertSarkariJob');
    }

    public function manageManualJob(){
        return view('admin.manageManualJobForm');
    }

    public function insertManualJob(){
        return view('admin.insertManualJobForm');
    }

    public function manageYojnaForm(){
        return view('admin.manageYojnaForm');
    }

    public function insertYojnaForm(){
        return view('admin.insertYojnaForm');
    }
}
