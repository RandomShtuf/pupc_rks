<?php

namespace App\Http\Controllers;

use App\Models\ProcessStep;
use App\Http\Requests\StepFormRequest;
use App\Models\ProcessStepAttachment;
use Illuminate\Support\Facades\Storage;

class AttachmentController extends Controller
{
    public function store(StepFormRequest $request, ProcessStep $step)
    {

        $processStepId = $request->process_step_id;
        $title = $request->title;
        $file = $request->file('file');
        $course = $request->course;
        $note = $request->note;
        $description = $request->description;

        $path = $title . '.' . $request->file->getClientOriginalExtension();
        $request->file->move(public_path('attachments'), $path);

        $attachment = new ProcessStepAttachment();
        $attachment->process_step_id = $processStepId;
        $attachment->title = $title;
        $attachment->file = $path;
        $attachment->course = $course;
        $attachment->note = $note;
        $attachment->description = $description;
        $attachment->save();

        return redirect()->back()->with('success', 'Attachment created successfully.');
    }
}
