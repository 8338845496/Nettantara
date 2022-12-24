<?php

namespace App\Http\Controllers;

use App\Models\Requestlist;
use App\Http\Requests\StoreRequestlistRequest;
use App\Http\Requests\UpdateRequestlistRequest;

class RequestlistController extends Controller
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
     * @param  \App\Http\Requests\StoreRequestlistRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequestlistRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Requestlist  $requestlist
     * @return \Illuminate\Http\Response
     */
    public function show(Requestlist $requestlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Requestlist  $requestlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Requestlist $requestlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRequestlistRequest  $request
     * @param  \App\Models\Requestlist  $requestlist
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequestlistRequest $request, Requestlist $requestlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Requestlist  $requestlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requestlist $requestlist)
    {
        //
    }
}
