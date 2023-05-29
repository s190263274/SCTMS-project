<?php

namespace App\Http\Controllers\Supervisor;

use App\Models\CoopTrainingProgram;
use App\Models\StudentCoopRegistration;
use App\Models\Evaluation;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EvaluateController extends Controller
{
    public function index()
    {
        $supervisorId = Auth::user()->id;
        return redirect()->route('supervisor.evaluate', ['supervisorId' => $supervisorId]);
    }

    public function evaluateBySupervisor()
    {
        $supervisorId = auth()->user()->id;
    
        $coops = CoopTrainingProgram::where('supervisor_id', $supervisorId)->get();
    
        $studentIds = StudentCoopRegistration::whereIn('coop_id', $coops->pluck('id'))->pluck('student_id');
    
        $evaluations = Evaluation::whereIn('student_id', $studentIds)->get();
    
        $supervisor = User::find($supervisorId);
    
        $evaluationsWithCoop = [];
    
        foreach ($evaluations as $evaluation) {
            $student = $evaluation->student;
            $coopName = $student->coop->name ?? 'N/A';
    
            $evaluationsWithCoop[] = [
                'evaluation' => $evaluation,
                'coopName' => $coopName,
            ];
        }
    
        return view('co-oopTrainingPlatform.panelPage.supervisor.evaluatePrograms.index', compact('evaluationsWithCoop', 'supervisor'));
    }
    
    
}

