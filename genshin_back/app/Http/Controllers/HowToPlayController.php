<?php

namespace App\Http\Controllers;

use App\Models\HowToPlay;
use App\Http\Requests\StoreHowToPlayRequest;
use App\Http\Requests\UpdateHowToPlayRequest;

class HowToPlayController extends Controller
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
     * @param  \App\Http\Requests\StoreHowToPlayRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHowToPlayRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HowToPlay  $howToPlay
     * @return \Illuminate\Http\Response
     */
    public function show(HowToPlay $howToPlay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HowToPlay  $howToPlay
     * @return \Illuminate\Http\Response
     */
    public function edit(HowToPlay $howToPlay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHowToPlayRequest  $request
     * @param  \App\Models\HowToPlay  $howToPlay
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHowToPlayRequest $request, HowToPlay $howToPlay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HowToPlay  $howToPlay
     * @return \Illuminate\Http\Response
     */
    public function destroy(HowToPlay $howToPlay)
    {
        //
    }
}
