<?php

namespace App\Http\Controllers;

use App\Models\hire_payment;
use App\Http\Requests\Storehire_paymentRequest;
use App\Http\Requests\Updatehire_paymentRequest;

class HirePaymentController extends Controller
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
     * @param  \App\Http\Requests\Storehire_paymentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storehire_paymentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hire_payment  $hire_payment
     * @return \Illuminate\Http\Response
     */
    public function show(hire_payment $hire_payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hire_payment  $hire_payment
     * @return \Illuminate\Http\Response
     */
    public function edit(hire_payment $hire_payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatehire_paymentRequest  $request
     * @param  \App\Models\hire_payment  $hire_payment
     * @return \Illuminate\Http\Response
     */
    public function update(Updatehire_paymentRequest $request, hire_payment $hire_payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hire_payment  $hire_payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(hire_payment $hire_payment)
    {
        //
    }
}
