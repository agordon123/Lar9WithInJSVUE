<?php

namespace App\Http\Controllers;

use App\Models\InboundJob;
use App\Http\Requests\StoreInboundJobRequest;
use App\Http\Requests\UpdateInboundJobRequest;

class InboundJobController extends Controller
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
     * @param  \App\Http\Requests\StoreInboundJobRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInboundJobRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InboundJob  $inboundJob
     * @return \Illuminate\Http\Response
     */
    public function show(InboundJob $inboundJob)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InboundJob  $inboundJob
     * @return \Illuminate\Http\Response
     */
    public function edit(InboundJob $inboundJob)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInboundJobRequest  $request
     * @param  \App\Models\InboundJob  $inboundJob
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInboundJobRequest $request, InboundJob $inboundJob)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InboundJob  $inboundJob
     * @return \Illuminate\Http\Response
     */
    public function destroy(InboundJob $inboundJob)
    {
        //
    }
}
