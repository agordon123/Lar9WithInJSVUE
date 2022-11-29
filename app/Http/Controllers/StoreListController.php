<?php

namespace App\Http\Controllers;

use App\Models\StoreList;
use App\Http\Requests\StoreStoreListRequest;
use App\Http\Requests\UpdateStoreListRequest;

class StoreListController extends Controller
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
     * @param  \App\Http\Requests\StoreStoreListRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStoreListRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StoreList  $storeList
     * @return \Illuminate\Http\Response
     */
    public function show(StoreList $storeList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StoreList  $storeList
     * @return \Illuminate\Http\Response
     */
    public function edit(StoreList $storeList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStoreListRequest  $request
     * @param  \App\Models\StoreList  $storeList
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStoreListRequest $request, StoreList $storeList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StoreList  $storeList
     * @return \Illuminate\Http\Response
     */
    public function destroy(StoreList $storeList)
    {
        //
    }
}
