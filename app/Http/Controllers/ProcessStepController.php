<?php

namespace App\Http\Controllers;

use App\Models\Process;
use Illuminate\Http\Request;

class ProcessStepController extends Controller
{
    public function index()
    {
        $processes = Process::all();
        return view('admin_panel.processes.index', compact('processes'));
    }
}
