<?php

namespace App\Http\Controllers;

use App\Models\Process;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $process = Process::find($id);
        $processes = Process::all();
        $sections = Section::all();

        return view('admin_panel.sections.index', compact('process', 'sections', 'processes'));
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
        $name = $request->input('name');

        // Check if a section with the same name already exists
        $existingSection = Section::where('name', $name)->where('process_id', $process_id)->first();
        if ($existingSection) {
            // Redirect back with an error message or handle the duplication as needed
            return redirect()->back()->with('error', 'Section with this name already exists in the selected process.');
        }

        // If no duplicate found, proceed to save
        $section = new Section();
        $section->name = $name;
        $section->process_id = $process_id;
        $section->save();

        return redirect()->back()->with('success', 'Section added successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Section $section)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Section $section)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Section $section)
    {
        //
    }
}
