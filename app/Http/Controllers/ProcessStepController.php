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
        if (!$process) {
            return redirect()->route('process.index')->with('error', 'Process not found.');
        }
        
        $steps = ProcessStep::with('process')
                ->where('process_id', $id)
                ->get();
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

        return redirect()->back()->with('success', 'Process step created successfully.');
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $step = ProcessStep::findOrFail($id);
        $step->title = $request->input('title');
        $step->description = $request->input('description');
        $step->save();

        return redirect()->route('step.index', ['id' => $step->process_id])->with('success', 'Step updated successfully.');
    }

    public function destroy($id)
    {
        $step = ProcessStep::findOrFail($id);
        $step->delete();

        return redirect()->back()->with('success', 'Step deleted successfully');
    }
}