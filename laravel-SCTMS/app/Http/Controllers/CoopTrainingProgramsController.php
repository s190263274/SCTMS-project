<?php

namespace App\Http\Controllers;


use App\Models\CoopTrainingProgram;
use Illuminate\Http\Request;
use App\Models\User;
use DateTime;

class CoopTrainingProgramsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = CoopTrainingProgram::all();
        
        foreach ($programs as $program) {
            $program->start_date = new DateTime($program->start_date);
            $program->end_date = new DateTime($program->end_date);
            $program->registration_close_date = new DateTime($program->registration_close_date);
        }

        return view('co-oopTrainingPlatform.panelPage.admin.coopTraingPrograms.index', compact('programs'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mentors = User::where('role', '1')->get();
        $supervisors = User::where('role', '2')->get();

        return view('co-oopTrainingPlatform.panelPage.admin.coopTraingPrograms.create', compact('mentors', 'supervisors'));    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $program = CoopTrainingProgram::create($request->all());
        return redirect()->route('adminPanel.coopTrainingPrograms.index')->with('success', 'Coop training program created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('co-oopTrainingPlatform.panelPage.admin.coopTraingPrograms.show', compact('coopTrainingProgram'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('co-oopTrainingPlatform.panelPage.admin.coopTraingPrograms.edit', compact('coopTrainingProgram'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $coopTraingProgram->update($request->all());
        return redirect()->route('adminPanel.coopTraingPrograms.index')->with('success', 'Coop training program updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $coopTraingProgram->delete();
        return redirect()->route('adminPanel.coopTraingPrograms.index')->with('success', 'Coop training program deleted successfully.');
    }
}
