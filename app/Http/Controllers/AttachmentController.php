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

        $path = $title . '.' . $request->file->getClientOriginalExtension();
        $request->file->move(public_path('attachments'), $path);

        if (in_array($file->getClientOriginalExtension(), ['doc', 'docx'])) {
            $domPdfPath = base_path('vendor/dompdf/dompdf');
            \PhpOffice\PhpWord\Settings::setPdfRendererPath($domPdfPath);
            \PhpOffice\PhpWord\Settings::setPdfRendererName('DomPDF');
            $Content = \PhpOffice\PhpWord\IOFactory::load(public_path('attachments/'.$path));
            $PDFWriter = \PhpOffice\PhpWord\IOFactory::createWriter($Content,'PDF');
            $path = $title . '.' . '.pdf';
            $PDFWriter->save(public_path('attachments/'.$path)); 
        }

        $attachmentData = [
            'process_step_id' => $processStepId,
            'title' => $title,
            'file' => $path,
            'course' => $course,
            'note' => $note,
            'description' => $description,
        ];

        $attachment = ProcessStepAttachment::create(
            [
                'process_step_id' => $processStepId,
                'file' => $path,
                'note' => $note,
            ],
            $attachmentData
        );

        $step->update([
            'attachment_title' => $title,
            'attachment_description' => $description,
            'attachment_course' => $course,
        ]);

        return redirect()->back()->with('success', 'Attachment created or updated successfully.');
    }

    public function shareAttachment(Request $request)
    {
        $process_step_attachment_id = $request->process_step_attachment_id;

        // Retrieve the ProcessStepAttachment
        $processStepAttachment = ProcessStepAttachment::find($process_step_attachment_id);
        $file = $processStepAttachment->file;

        // Check if an AuditorAttachment with the same process_step_attachment_id exists
        $existingAttachment = AuditorAttachment::where('file', $file)->first();
        if ($existingAttachment) {
            return redirect()->back()->with('error', 'Attachment already shared.');
        }

        // If no duplicate found, proceed to save
        $processStepAttachment = ProcessStepAttachment::findOrFail($process_step_attachment_id);

        $attachment = new AuditorAttachment();
        $attachment->process_step_attachment_id = $process_step_attachment_id;
        $attachment->file = $processStepAttachment->file; // Assuming the file path is stored in `file` column of `process_step_attachment`
        $attachment->save();

        return redirect()->back()->with('success', 'Attachment shared successfully.');
    }


    public function showAttachment()
    {
        $attachments = AuditorAttachment::all();

        return view('home.auditor', compact('attachments'));
    }
}
