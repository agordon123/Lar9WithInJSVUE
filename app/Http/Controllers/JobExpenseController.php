<?php

namespace App\Http\Controllers;

use App\Models\JobExpense;
use App\Http\Requests\StoreJobExpenseRequest;
use App\Http\Requests\UpdateJobExpenseRequest;

class JobExpenseController extends Controller
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
     * @param  \App\Http\Requests\StoreJobExpenseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobExpenseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobExpense  $jobExpense
     * @return \Illuminate\Http\Response
     */
    public function show(JobExpense $jobExpense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobExpense  $jobExpense
     * @return \Illuminate\Http\Response
     */
    public function edit(JobExpense $jobExpense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobExpenseRequest  $request
     * @param  \App\Models\JobExpense  $jobExpense
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobExpenseRequest $request, JobExpense $jobExpense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobExpense  $jobExpense
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobExpense $jobExpense)
    {
        //
    }
}
