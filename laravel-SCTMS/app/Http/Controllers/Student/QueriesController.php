<?php

namespace App\Http\Controllers\Student;


use App\Models\StudentCoopRegistration;
use App\Models\CoopTrainingProgram;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Query;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class QueriesController extends Controller
{

    public function index()
    {
        $studentId = Auth::id();
        $queries = Query::where('student_id', $studentId)->get();

        return view('co-oopTrainingPlatform.panelPage.student.queries.index', compact('queries'));
    }
    public function createToMentor()
    {
        return view('co-oopTrainingPlatform.panelPage.student.queries.createToMentor');
    }
    
    public function createToSupervisor()
    {
        return view('co-oopTrainingPlatform.panelPage.student.queries.createToSupervisor');
    }
    
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'subject' => 'required',
            'message' => 'required',
        ]);
    
        $studentId = Auth::id();
        $registration = StudentCoopRegistration::where('student_id', $studentId)->first();
    
        if (!$registration) {
            return redirect()->back()->with('error', 'No coop registration found for the student.');
        }
    
        $coopId = $registration->coop_id;
        $coop = CoopTrainingProgram::find($coopId);
    
        if (!$coop) {
            return redirect()->back()->with('error', 'Coop training program not found.');
        }
    
        $mentorId = $coop->mentor_id;
        $supervisorId = $coop->supervisor_id;
    
        $query = new Query();
        $query->subject = $validatedData['subject'];
        $query->message = $validatedData['message'];
        $query->student_id = $studentId;
    
        if ($request->has('recipient') && $request->recipient === 'mentor') {
            $query->mentor_id = $mentorId;
        } elseif ($request->has('recipient') && $request->recipient === 'supervisor') {
            $query->supervisor_id = $supervisorId;
        }
    
        $query->save();
    
        return redirect()->route('student.queries.index')->with('success', 'Query submitted successfully.');
    }
    
}
