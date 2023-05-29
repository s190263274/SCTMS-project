<?php

namespace App\Http\Controllers\Mentor;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Task;
use App\Models\Evaluation;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $mentorId = auth()->user()->id;
        $mentor = User::find($mentorId);

        $enrolledStudents = $this->getEnrolledStudents($mentor);

        return view('co-oopTrainingPlatform.panelPage.mentor.tasks.index', compact('mentor', 'enrolledStudents'));
    }

    public function showTaskForm($studentId)
    {
        $student = User::find($studentId);

        return view('co-oopTrainingPlatform.panelPage.mentor.tasks.create', compact('student'));
    }

    public function storeTasks(Request $request, $studentId)
    {
        $student = User::find($studentId);

        // Check if the student already has tasks
        if ($student->tasks()->exists()) {
            return redirect()->route('mentor.tasks.index')->with('error', 'Tasks have already been set for the student.');
        }

        // Validate and store the tasks
        $validatedData = $request->validate([
            'task1' => 'required',
            'task2' => 'required',
            'task3' => 'required',
            'task4' => 'required',
            'task5' => 'required',
        ]);

        $tasks = [
            'task1' => $validatedData['task1'],
            'task2' => $validatedData['task2'],
            'task3' => $validatedData['task3'],
            'task4' => $validatedData['task4'],
            'task5' => $validatedData['task5'],
        ];

        $student->tasks()->create($tasks);

        return redirect()->route('mentor.tasks.index')->with('success', 'Tasks have been set for the student.');
    }

    public function evaluateTasks($studentId)
    {
        $student = User::find($studentId);

        // Check if the student has completed the tasks
        if (!$this->tasksCompleted($student)) {
            return redirect()->route('mentor.tasks.index')->with('error', 'Tasks must be completed before evaluation.');
        }

        // Check if evaluation already exists
        $evaluation = Evaluation::where('student_id', $studentId)->first();

        if ($evaluation) {
            return redirect()->route('mentor.tasks.index')->with('error', 'Evaluation already exists for the student.');
        }

        // Retrieve the tasks and responses for the student
        $tasks = $student->tasks;

        // Pass the tasks and responses to the evaluation view
        return view('co-oopTrainingPlatform.panelPage.mentor.tasks.evaluate', compact('student', 'tasks'));
    }

    public function storeEvaluation(Request $request, $studentId)
    {
        $validatedData = $request->validate([
            'evaluation1' => 'required',
            'evaluation2' => 'required',
            'evaluation3' => 'required',
        ]);

        $evaluation = Evaluation::create([
            'student_id' => $studentId,
            'evaluation1' => $validatedData['evaluation1'],
            'evaluation2' => $validatedData['evaluation2'],
            'evaluation3' => $validatedData['evaluation3'],
        ]);

        // Mark the tasks as evaluated
        $student = User::find($studentId);
        $student->tasks->each(function ($task) {
            $task->update(['evaluated' => true]);
        });

        return redirect()->route('mentor.tasks.index')->with('success', 'Evaluation has been submitted for the student.');
    }

    private function getEnrolledStudents($mentor)
    {
        $coops = $mentor->mentorCoops;
        $enrolledStudents = [];

        foreach ($coops as $coop) {
            $registrations = $coop->studentCoopRegistrations;

            foreach ($registrations as $registration) {
                $student = $registration->student;
                $registrationDate = $registration->created_at;

                $enrolledStudents[] = [
                    'student' => $student,
                    'registrationDate' => $registrationDate,
                ];
            }
        }

        return $enrolledStudents;
    }

    private function tasksCompleted($student)
    {
        // Check if all task responses are not null
        return $student->tasks()->whereNull('response1')
            ->orWhereNull('response2')
            ->orWhereNull('response3')
            ->orWhereNull('response4')
            ->orWhereNull('response5')
            ->doesntExist();
    }
}
