<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CoopTrainingProgram;
use App\Models\StudentCoopRegistration;
use Illuminate\Support\Facades\Auth;

class CoopRegistrationController extends Controller
{
    public function index()
    {
        $availableCoops = CoopTrainingProgram::all();

        return view('co-oopTrainingPlatform.panelPage.student.coopRegistration.index', compact('availableCoops'));
    }


    public function register($id)
    {
        $coop = CoopTrainingProgram::findOrFail($id);
        $studentId = Auth::id();

        // Check if the student is already registered for a coop
        $existingRegistration = StudentCoopRegistration::where('student_id', $studentId)->first();
        if ($existingRegistration) {
            return redirect()->back()->with('error', 'You are already registered for a co-op program.');
        }

        // Create a new registration
        $registration = new studentCoopRegistration();
        $registration->coop_id = $coop->id;
        $registration->student_id = $studentId;
        // Set any additional fields for the registration
        $registration->save();

        return redirect()->back()->with('success', 'Co-op registration successful!');
    }

    public function enrolledCoops()
    {
        $studentId = Auth::id();

        $enrolledCoops = studentCoopRegistration::where('student_id', $studentId)
            ->with('coop') // Use the correct relationship name 'coop'
            ->get();

        return $enrolledCoops;
    }

    public function enrolledCoopsPage()
    {
        $enrolledCoops = $this->getEnrolledCoops();

        return view('co-oopTrainingPlatform.panelPage.student.coopRegistration.enrolled-coops', compact('enrolledCoops'));
    }


    private function getEnrolledCoops()
    {
        $studentId = Auth::id();

        $enrolledCoops = StudentCoopRegistration::where('student_id', $studentId)
            ->with('coop.mentor', 'coop.supervisor') // Load the 'coop' relationship with 'mentor' and 'supervisor' eager loaded
            ->get();

        return $enrolledCoops;
    }







}
