<?php

namespace App\Http\Controllers;

use App\Models\ExpenseReason;
use App\Http\Requests\StoreExpenseReasonRequest;
use App\Http\Requests\UpdateExpenseReasonRequest;

class ExpenseReasonController extends Controller
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
     * @param  \App\Http\Requests\StoreExpenseReasonRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExpenseReasonRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExpenseReason  $expenseReason
     * @return \Illuminate\Http\Response
     */
    public function show(ExpenseReason $expenseReason)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExpenseReason  $expenseReason
     * @return \Illuminate\Http\Response
     */
    public function edit(ExpenseReason $expenseReason)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExpenseReasonRequest  $request
     * @param  \App\Models\ExpenseReason  $expenseReason
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExpenseReasonRequest $request, ExpenseReason $expenseReason)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExpenseReason  $expenseReason
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpenseReason $expenseReason)
    {
        //
    }
}
