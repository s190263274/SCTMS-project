<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoopTrainingProgramsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Student panel routes
Route::group(['prefix' => 'studentPanel', 'middleware' => 'studentPanel'], function () {
    // Student panel main page
    Route::get('/', function (){
        return view('studentPanel');
    })->name('studentPanel');

    // Student panel profile resource routes
    Route::get('/profile/{id}', [App\Http\Controllers\Student\Profile::class, 'show'])->name('studentPanel.profile.show');
    Route::get('/students/coop-registration', [App\Http\Controllers\Student\CoopRegistrationController::class, 'index'])
    ->name('student.coopRegistration.index');
    Route::get('/students/coop-registration/{id}', [App\Http\Controllers\Student\CoopRegistrationController::class, 'register'])
    ->name('student.coopRegistration.register');
    Route::get('/enrolled-coops', [App\Http\Controllers\Student\CoopRegistrationController::class, 'enrolledCoopsPage'])
    ->name('student.enrolled-coops');

    Route::get('/studentPanel/tasks', [\App\Http\Controllers\Student\TasksController::class, 'index'])
    ->name('student.tasks.index');

    Route::post('/studentPanel/tasks/save-responses', [App\Http\Controllers\Student\TasksController::class, 'saveResponses'])
    ->name('student.tasks.saveResponses');
    
    // Student queries
    Route::get('/student/queries', [App\Http\Controllers\Student\QueriesController::class, 'index'])
    ->name('student.queries.index');

    Route::get('/student/queries/create/mentor', [App\Http\Controllers\Student\QueriesController::class, 'createToMentor'])
    ->name('student.queries.create.mentor');
    Route::get('/student/queries/create/supervisor', [App\Http\Controllers\Student\QueriesController::class, 'createToSupervisor'])
    ->name('student.queries.create.supervisor');

    Route::post('/student/queries', [App\Http\Controllers\Student\QueriesController::class, 'store'])
    ->name('student.queries.store');
    Route::get('/student/queries/{query}', [App\Http\Controllers\Student\QueriesController::class, 'show'])
    ->name('student.queries.show');
});


// Super admin panel routes
Route::group(['prefix' => 'superAdminPanel', 'middleware' => 'superAdminPanel'], function () {
    // Super admin panel main page
    Route::get('/', function (){
        return view('superAdminPanel');
    })->name('superAdminPanel');

    // SuperAdmin panel profile resource routes
    Route::get('/profile/{id}', [App\Http\Controllers\SuperAdmin\Profile::class, 'show'])->name('superAdminPanel.profile.show');
});


// Admin panel routes
Route::group(['prefix' => 'adminPanel', 'middleware' => 'adminPanel'], function () {
    // Admin panel main page
    Route::get('/', function (){
        return view('adminPanel');
    })->name('adminPanel');

    // Admin panel profile resource routes
    Route::get('/profile/{id}', [App\Http\Controllers\Admin\Profile::class, 'show'])->name('adminPanel.profile.show');
    

    // Admin panel coopTrainingPrograms resource routes
    Route::resource('/coopTraingPrograms', CoopTrainingProgramsController::class)->names([
        'index' => 'adminPanel.coopTrainingPrograms.index',
        'create' => 'adminPanel.coopTrainingPrograms.create',
        'store' => 'adminPanel.coopTrainingPrograms.store',
        'show' => 'adminPanel.coopTrainingPrograms.show',
        'edit' => 'adminPanel.coopTrainingPrograms.edit',
        'update' => 'adminPanel.coopTrainingPrograms.update',
        'destroy' => 'adminPanel.coopTrainingPrograms.destroy'
    ]);

     // Admin panel students resource routes
    Route::resource('/students', App\Http\Controllers\Admin\StudentsController::class)->names([
    'index' => 'adminPanel.students.index',
    'create' => 'adminPanel.students.create',
    'store' => 'adminPanel.students.store',
    'show' => 'adminPanel.students.show',
    'edit' => 'adminPanel.students.edit',
    'update' => 'adminPanel.students.update',
    'destroy' => 'adminPanel.students.destroy'
    ]);

     // Admin panel mentors resource routes
     Route::resource('/mentors', App\Http\Controllers\Admin\MentorsController::class)->names([
        'index' => 'adminPanel.mentors.index',
        'create' => 'adminPanel.mentors.create',
        'store' => 'adminPanel.mentors.store',
        'show' => 'adminPanel.mentors.show',
        'edit' => 'adminPanel.mentors.edit',
        'update' => 'adminPanel.mentors.update',
        'destroy' => 'adminPanel.mentors.destroy'
        ]);

     // Admin panel supervisors resource routes
     Route::resource('/supervisors', App\Http\Controllers\Admin\SupervisorsController::class)->names([
        'index' => 'adminPanel.supervisors.index',
        'create' => 'adminPanel.supervisors.create',
        'store' => 'adminPanel.supervisors.store',
        'show' => 'adminPanel.supervisors.show',
        'edit' => 'adminPanel.supervisors.edit',
        'update' => 'adminPanel.supervisors.update',
        'destroy' => 'adminPanel.supervisors.destroy'
        ]);
});


// Supervisor panel routes
Route::group(['prefix' => 'supervisorPanel', 'middleware' => 'supervisorPanel'], function () {
    // Supervisor panel main page
    Route::get('/', function (){
        return view('supervisorPanel');
    })->name('supervisorPanel');

    // Supervisor panel profile resource routes
    Route::get('/profile/{id}', [App\Http\Controllers\Supervisor\Profile::class, 'show'])->name('supervisorPanel.profile.show');

    // Route to the coopsBySupervisor action with the supervisor ID
    Route::get('/supervisor/coops/{supervisorId}', [App\Http\Controllers\Supervisor\CoopController::class, 'coopsBySupervisor'])
    ->name('supervisor.coops');
    Route::get('/supervisor/coops/', [App\Http\Controllers\Supervisor\CoopController::class, 'index'])
    ->name('supervisor.coops.index');

    // Route to the tasksBySupervisor action with the supervisor ID and coop ID
    Route::get('/supervisor/tasks/{supervisorId}/coops/{coopId}', [App\Http\Controllers\Supervisor\TaskController::class, 'tasksBysupervisor'])
    ->name('supervisor.tasks');

    // Route to the tasks index for the supervisor
    Route::get('/supervisor/tasks', [App\Http\Controllers\Supervisor\TaskController::class, 'index'])
    ->name('supervisor.tasks.index');


    // Route to the evaluateBySupervisor action with the supervisor ID
    Route::get('/supervisor/evaluate/{supervisorId}', [App\Http\Controllers\Supervisor\EvaluateController::class, 'evaluateBySupervisor'])
    ->name('supervisor.evaluate');
    Route::get('/supervisor/evaluate/', [App\Http\Controllers\Supervisor\EvaluateController::class, 'index'])
    ->name('supervisor.evaluate.index');

    Route::get('/queries', [App\Http\Controllers\Supervisor\QueriesController::class, 'index'])
    ->name('supervisor.queries.index');
});


// Mentor panel routes
Route::group(['prefix' => 'mentorPanel', 'middleware' => 'mentorPanel'], function () {
    // Mentor panel main page
    Route::get('/', function (){
        return view('mentorPanel');
    })->name('mentorPanel');

    // Mentor panel profile resource routes
    Route::get('/profile/{id}', [App\Http\Controllers\Mentor\Profile::class, 'show'])->name('mentorPanel.profile.show');

    // Route to the index action to get the mentor ID
    Route::get('/mentor/coops', [App\Http\Controllers\Mentor\CoopController::class, 'index'])->name('mentor.coops.index');

    // Route to the coopsByMentor action with the mentor ID
    Route::get('/mentor/coops/{mentorId}', [App\Http\Controllers\Mentor\CoopController::class, 'coopsByMentor'])->name('mentor.coops');

    
    Route::get('/mentor/tasks', [App\Http\Controllers\Mentor\TasksController::class, 'index'])->name('mentor.tasks.index');
    Route::get('/mentor/tasks/set/{studentId}', [App\Http\Controllers\Mentor\TasksController::class, 'showTaskForm'])->name('mentor.tasks.set');
    Route::post('/mentor/tasks/store/{studentId}', [App\Http\Controllers\Mentor\TasksController::class, 'storeTasks'])->name('mentor.tasks.store');
    Route::get('/mentor/tasks/evaluate/{studentId}', [App\Http\Controllers\Mentor\TasksController::class, 'evaluateTasks'])->name('mentor.tasks.evaluate');

    Route::post('/mentor/tasks/evaluate/{studentId}', [App\Http\Controllers\Mentor\TasksController::class, 'storeEvaluation'])->name('mentor.tasks.storeEvaluation');

    Route::get('/queries', [App\Http\Controllers\Mentor\QueriesController::class, 'index'])
    ->name('mentor.queries.index');
});

