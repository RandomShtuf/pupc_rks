<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\Models\Section;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all();
        $sections = Section::all();
        $records = Record::all();
        return view('admin_panel.subjects.index', compact('subjects', 'sections', 'records'));
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
        $process_id = $request->input('process_id');
        $section_id = $request->input('section_id');
        $name = $request->input('name');

        // Check if a subject with the same name already exists
        $existingSubject = Subject::where('name', $name)->where('section_id', $section_id)->first();
        if ($existingSubject) {
            // Redirect back with an error message or handle the duplication as needed
            return redirect()->back()->with('error', 'Subject with this name already exists in the selected section.');
        }

        // If no duplicate found, proceed to save
        $subject = new Subject();

        $subject->process_id = $process_id;
        $subject->section_id = $section_id;
        $subject->name = $name;
        $subject->save();

        return redirect()->back()->with('success', 'Subject added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        //
    }
}
