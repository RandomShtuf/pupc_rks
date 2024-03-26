<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\Models\Process;
use App\Models\Section;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Validator;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = Record::all();
        return view('admin_panel.records.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $processId = $request->process_id;
        $sectionId = $request->section_id;
        $subjectId = $request->subject_id;
        $title = $request->title;
        $file = $request->file('file');

        // Store the file in the 'records' directory with the generated filename
        // $path = Storage::putFileAs('records', $file, $filename);

        $path = $title . '.' . $request->file->getClientOriginalExtension();
        $request->file->move(public_path('records'), $path);

        $record = new Record();
        $record->process_id = $processId;
        $record->section_id = $sectionId;
        $record->subject_id = $subjectId;
        $record->title = $title;
        $record->file = $path;
        $record->save();

        return redirect()->back()->with('success', 'Record created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Record $record)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Record $record)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Record $record)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Record $record)
    {
        //
    }
}
