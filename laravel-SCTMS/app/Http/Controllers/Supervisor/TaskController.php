<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use App\Models\CoopTrainingProgram;


class TaskController extends Controller
{
    public function index()
    {
        $supervisorId = Auth::user()->getAttribute('id');
        $supervisor = User::find($supervisorId);
    
        if (!$supervisor) {
            abort(404); // Handle the case when supervisor is not found
        }
    
        $coopId = $supervisor->supervisorCoops->first()->id;
    
        return redirect()->route('supervisor.tasks', ['supervisorId' => $supervisorId, 'coopId' => $coopId]);
    }
    
    
    public function tasksBysupervisor($supervisorId)
    {
        $supervisor = User::find($supervisorId);
        if (!$supervisor) {
            abort(404); // Handle the case when the supervisor is not found
        }
    
        $coops = $supervisor->supervisorCoops;
        $studentIds = $coops->pluck('studentCoopRegistrations')->flatten()->pluck('student_id')->all();
    
        $students = User::whereIn('id', $studentIds)->get();
    
        $tasks = Task::whereIn('student_id', $studentIds)->get();
    
        return view('co-oopTrainingPlatform.panelPage.supervisor.tasks.index', compact('tasks', 'students'));
    }
    
    
}
