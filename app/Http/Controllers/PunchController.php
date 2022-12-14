<?php

namespace App\Http\Controllers;

use App\Models\Punch;
use App\Http\Requests\StorePunchRequest;
use App\Http\Requests\UpdatePunchRequest;

class PunchController extends Controller
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
     * @param  \App\Http\Requests\StorePunchRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePunchRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Punch  $punch
     * @return \Illuminate\Http\Response
     */
    public function show(Punch $punch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Punch  $punch
     * @return \Illuminate\Http\Response
     */
    public function edit(Punch $punch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePunchRequest  $request
     * @param  \App\Models\Punch  $punch
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePunchRequest $request, Punch $punch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Punch  $punch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Punch $punch)
    {
        //
    }
}
