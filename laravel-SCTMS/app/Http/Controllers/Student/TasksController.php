<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;


class TasksController extends Controller
{
    public function index()
    {
        $task = Task::where('student_id', auth()->user()->id)->first();

        return view('co-oopTrainingPlatform.panelPage.student.tasks.index', compact('task'));
    }

    public function pendingTasksCount()
    {
        $studentId = auth()->user()->id;
        $responseColumns = ['response1', 'response2', 'response3', 'response4', 'response5'];
        $pendingTasksCount = 0;
    
        foreach ($responseColumns as $column) {
            $count = Task::where('student_id', $studentId)->whereNull($column)->count();
            $pendingTasksCount += $count;
        }
    
        return $pendingTasksCount;
    }
    
    public function completedTasksCount()
    {
        $studentId = auth()->user()->id;
        $responseColumns = ['response1', 'response2', 'response3', 'response4', 'response5'];
        $completedTasksCount = 0;
    
        foreach ($responseColumns as $column) {
            $count = Task::where('student_id', $studentId)->whereNotNull($column)->count();
            $completedTasksCount += $count;
        }
    
        return $completedTasksCount;
    }
    
    public function saveResponses(Request $request)
    {
        $responses = $request->input('responses');

        $task = Task::where('student_id', auth()->user()->id)->first();

        foreach ($responses as $taskId => $response) {
            $task->update(['response'.$taskId => $response]);
        }

        return redirect()->back()->with('success', 'Responses saved successfully.');
    }
}
