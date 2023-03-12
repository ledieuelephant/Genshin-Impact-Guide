<?php

namespace App\Http\Controllers;

use App\Models\Guides;
use App\Http\Requests\StoreGuidesRequest;
use App\Http\Requests\UpdateGuidesRequest;

class GuidesController extends Controller
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
     * @param  \App\Http\Requests\StoreGuidesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGuidesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guides  $guides
     * @return \Illuminate\Http\Response
     */
    public function show(Guides $guides)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guides  $guides
     * @return \Illuminate\Http\Response
     */
    public function edit(Guides $guides)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGuidesRequest  $request
     * @param  \App\Models\Guides  $guides
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGuidesRequest $request, Guides $guides)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guides  $guides
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guides $guides)
    {
        //
    }
}
