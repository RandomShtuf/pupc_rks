<?php

namespace App\Http\Controllers;

use App\Models\Process;
use App\Models\ProcessStep;
use Illuminate\Http\Request;
use App\Models\StepAttachment;

class ProcessStepController extends Controller
{
    public function index($id)
    {
        $process = Process::find($id);
        $steps = ProcessStep::with('process')->where('process_id', $id)->get();
        return view('admin_panel.steps.index', compact('process', 'steps'));
    }

    public function store(Request $request)
    {
        $processId = $request->process_id;
        $title = $request->title;
        $description = $request->description;

        $processStep = new ProcessStep();
        $processStep->process_id = $processId;
        $processStep->title = $title;
        $processStep->description = $description;
        $processStep->save();

        // $stepAttachment = new StepAttachment();
        // $stepAttachment->process_step_id = $processStep->id;
        // $stepAttachment->title = $title;
        // $stepAttachment->description = $description;
        // $stepAttachment->course = $request->course;
        // $stepAttachment->file = $request->file;
        // $stepAttachment->note = $request->note;
        // $stepAttachment->save();

        return redirect()->back()->with('success', 'Process step created successfully.');
    }


}
