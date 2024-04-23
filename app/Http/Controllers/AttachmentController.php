<?php

namespace App\Http\Controllers;

use App\Models\ProcessStep;
use Illuminate\Http\Request;
use App\Models\AuditorAttachment;
use Illuminate\Support\Facades\View;
use App\Models\ProcessStepAttachment;
use App\Http\Requests\StepFormRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

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

        // Validate file presence
        $request->validate([
            'file' => 'required|file',
        ]);

        $path = $title . '.' . $request->file->getClientOriginalExtension();
        $request->file->move(public_path('attachments'), $path);

        $attachmentData = [
            'process_step_id' => $processStepId,
            'title' => $title,
            'file' => $path,
            'course' => $course,
            'note' => $note,
            'description' => $description,
        ];

        $attachment = ProcessStepAttachment::updateOrCreate(
            ['process_step_id' => $processStepId],
            $attachmentData
        );

        return redirect()->back()->with('success', 'Attachment created or updated successfully.');
        // return redirect()->route('step.show', $step->id)->with('success', 'Attachment created successfully.');
    }

    public function shareAttachment(Request $request)
    {
        $processStepAttachmentId = $request->process_step_attachment_id;

        $attachment = New AuditorAttachment();

        $attachment->process_step_attachment_id = $processStepAttachmentId;

        $attachment->save();

        return redirect()->back()->with('success', 'Attachment shared successfully.');
    }

    public function showAttachment()
    {
        $attachments = AuditorAttachment::all();

        return view('home.auditor', compact('attachments'));
    }
}
