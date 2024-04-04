<?php

namespace App\Http\Controllers;

use App\Models\Process;
use Illuminate\Http\Request;
use App\Models\AuditorAttachment;

class HomepageController extends Controller
{

    public function index()
    {
        return view('home.index');
    }

    public function processes()
    {
        return view('home.processes');
    }

    public function steps($processId)
    {
        $process = Process::find($processId);
        $processes = Process::all();
        return view('home.steps');
    }

    public function auditorPage()
    {
        $attachments = AuditorAttachment::all();

        return view('home.auditor', compact('attachments'));
    }
}
