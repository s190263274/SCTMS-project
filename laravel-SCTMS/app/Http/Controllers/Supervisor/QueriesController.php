<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Models\Query;

class QueriesController extends Controller
{
    public function index()
    {
        $queries = Query::all();

        return view('co-oopTrainingPlatform.panelPage.supervisor.queries.index', compact('queries'));
    }
}
