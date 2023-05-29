<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        $user = auth()->user();
        switch ($user->role) {
            case 3:
                return redirect()->route('adminPanel');
                break;
            case 4:
                return redirect()->route('superAdminPanel');
                break;
            case 2:
                return redirect()->route('supervisorPanel');
                break;
            case 1:
                return redirect()->route('mentorPanel');
                break;
            case 0:
                return redirect()->route('studentPanel');
                break;
            default:
                // handle unknown role
                break;
        }
        // return view('home');
    }
}
