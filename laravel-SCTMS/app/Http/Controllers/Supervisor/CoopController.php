<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class CoopController extends Controller
{

    public function index()
    {
        $supervisorId = Auth::user()->getAttribute('id'); // Retrieve the mentor ID of the currently logged-in mentor

        return redirect()->route('supervisor.coops', ['supervisorId' => $supervisorId]);
    }

    public function coopsBySupervisor($supervisorId)
    {
        $supervisor = User::find($supervisorId);
        if (!$supervisor) {
            abort(404); // Or handle the case when mentor is not found
        }

        $coops = $supervisor->supervisorCoops;

        return view('co-oopTrainingPlatform.panelPage.supervisor.coopTraingPrograms.index', compact('coops', 'supervisor'));
    }

}

