<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoresupervisorRequest;
use App\Http\Requests\UpdatesupervisorRequest;
use App\Models\Supervisor\supervisor;

class SupervisorController extends Controller
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
    public function store(StoresupervisorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(supervisor $supervisor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(supervisor $supervisor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatesupervisorRequest $request, supervisor $supervisor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(supervisor $supervisor)
    {
        //
    }
}
