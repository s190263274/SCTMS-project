<?php

namespace App\Http\Controllers\Mentor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Query;

class QueriesController extends Controller
{
    public function index()
    {
        $queries = Query::all();

        return view('co-oopTrainingPlatform.panelPage.mentor.queries.index', compact('queries'));
    }
}
