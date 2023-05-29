<?php

namespace App\Http\Controllers\Mentor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CoopController extends Controller
{
    public function index()
    {
        $mentorId = Auth::user()->getAttribute('id'); // Retrieve the mentor ID of the currently logged-in mentor

        return redirect()->route('mentor.coops', ['mentorId' => $mentorId]);
    }

    public function coopsByMentor($mentorId)
    {
        $mentor = User::find($mentorId);
        if (!$mentor) {
            abort(404); // Or handle the case when mentor is not found
        }

        $coops = $mentor->mentorCoops;

        return view('co-oopTrainingPlatform.panelPage.mentor.coopTraingPrograms.index', compact('coops', 'mentor'));
    }

}



