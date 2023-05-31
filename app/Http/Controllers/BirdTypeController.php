<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storebird_typeRequest;
use App\Http\Requests\Updatebird_typeRequest;
use App\Models\bird_type;

class BirdTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storebird_typeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(bird_type $bird_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bird_type $bird_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatebird_typeRequest $request, bird_type $bird_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bird_type $bird_type)
    {
        //
    }
}
