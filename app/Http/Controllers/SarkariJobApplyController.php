<?php

namespace App\Http\Controllers;

use App\Models\SarkariJobApply;
use App\Http\Requests\StoreSarkariJobApplyRequest;
use App\Http\Requests\UpdateSarkariJobApplyRequest;

class SarkariJobApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSarkariJobApplyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSarkariJobApplyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SarkariJobApply  $sarkariJobApply
     * @return \Illuminate\Http\Response
     */
    public function show(SarkariJobApply $sarkariJobApply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SarkariJobApply  $sarkariJobApply
     * @return \Illuminate\Http\Response
     */
    public function edit(SarkariJobApply $sarkariJobApply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSarkariJobApplyRequest  $request
     * @param  \App\Models\SarkariJobApply  $sarkariJobApply
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSarkariJobApplyRequest $request, SarkariJobApply $sarkariJobApply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SarkariJobApply  $sarkariJobApply
     * @return \Illuminate\Http\Response
     */
    public function destroy(SarkariJobApply $sarkariJobApply)
    {
        //
    }
}
