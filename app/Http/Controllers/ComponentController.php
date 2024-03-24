<?php

namespace App\Http\Controllers;

use App\Models\Process;
use App\Models\Section;
use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function index()
    {
        $processes = Process::all();
        $sections = Section::all();
        return view('admin_panel.components.index', compact('processes', 'sections'));
    }
}
