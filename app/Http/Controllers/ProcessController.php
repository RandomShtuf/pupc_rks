<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\Models\Process;
use App\Models\Section;
use App\Models\Subject;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $processes = Process::all();
        return view('admin_panel.processes.index', compact('processes'));
    }

    public function sections($id)
    {
        $process = Process::find($id);
        $processes = Process::all();
        $sections = Section::with('process')->where('process_id', $id)->get();

        return view('admin_panel.sections.index', compact('process', 'sections', 'processes'));
    }

    public function subjects($processId, $sectionId)
    {
        $process = Process::find($processId);
        $section = Section::find($sectionId);
        $sections = Section::all();
        $subjects = Subject::with('section')->where('section_id', $sectionId)->get();

        return view('admin_panel.subjects.index', compact('process', 'section', 'sections', 'subjects'));
    }

    public function records($processId, $sectionId, $subjectId)
    {
        $process = Process::find($processId);
        $section = Section::find($sectionId);
        $subject = Subject::find($subjectId);
        $sections = Section::all();
        $subjects = Subject::all();
        $records = Record::with('process', 'section', 'subject')->where('process_id', $processId)->where('section_id', $sectionId)->where('subject_id', $subjectId)->get();

        return view('admin_panel.records.index', compact('process', 'section', 'subject', 'sections', 'subjects', 'records'));
    }

    public function viewRecord($processId, $sectionId, $subjectId)
    {
        $process = Process::find($processId);
        $section = Section::find($sectionId);
        $subject = Subject::find($subjectId);
        $sections = Section::all();
        $subjects = Subject::all();
        $records = Record::with('process', 'section', 'subject')->where('process_id', $processId)->where('section_id', $sectionId)->where('subject_id', $subjectId)->get();

        return view('admin_panel.records.index', compact('process', 'section', 'subject', 'sections', 'subjects', 'records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input('name');

        // Check if a process with the same name already exists
        $existingProcess = Process::where('name', $name)->first();

        if ($existingProcess) {
            // Redirect back with an error message or handle the duplication as needed
            return redirect()->back()->with('error', 'Process with this name already exists.');
        }

        // If no duplicate found, proceed to save
        $process = new Process();
        $process->name = $name;
        $process->save();

        return redirect()->back()->with('success', 'Process added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Process $process)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Process $process)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Process $process)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Process $process)
    {
        //
    }
}
