<?php

use App\Models\ProcessStep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\AttachmentController;
use App\Http\Controllers\ProcessStepController;
use App\Http\Controllers\ClassroomManagementController;

Route::get('/', [HomepageController::class, 'index'])->name('homepage.index');
Route::get('/processes', [HomepageController::class, 'processes'])->name('home.processes');
Route::get('/processes/{id}/steps', [HomepageController::class, 'steps'])->name('home.steps');
Route::get('/auditor\'s-page', [HomepageController::class, 'auditorPage'])->name('home.auditor');

Route::get('/dashboard', function () {
    return view('admin_panel.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::controller(ComponentController::class)->group(function () {
        Route::resource('component', ComponentController::class);
        Route::get('component/process/{processId}/steps', [ComponentController::class, 'steps'])->name('component.step');
        Route::get('process/{processId}/sections/{sectionId}/subjects', [ComponentController::class, 'subjects'])->name('subject.index');
        Route::get('process/{processId}/sections/{sectionId}/subjects/{subjectId}/records', [ComponentController::class, 'records'])->name('record.index');
    });

    Route::controller(ProcessController::class)->group(function () {
        Route::resource('process', ProcessController::class);
        Route::get('process/{processId}/sections', [ProcessController::class, 'sections'])->name('section.index');
        Route::get('process/{processId}/sections/{sectionId}/subjects', [ProcessController::class, 'subjects'])->name('subject.index');
        Route::get('process/{processId}/sections/{sectionId}/subjects/{subjectId}/records', [ProcessController::class, 'records'])->name('record.index');
    });

    Route::controller(ProcessStepController::class)->group(function () {
        Route::get('process/{id}/steps', [ProcessStepController::class, 'index'])->name('step.index');
        Route::post('step', [ProcessStepController::class, 'store'])->name('step.store');
    });

    Route::controller(AttachmentController::class)->group(function () {
        Route::post('attachment', [AttachmentController::class, 'store'])->name('attachment.store');
        Route::post('/share-attachment', [AttachmentController::class, 'shareAttachment'])->name('share.attachment');
        Route::get('/attachment/{attachment}', [AttachmentController::class, 'showAttachment'])->name('attachment.show');
    });

    Route::controller(SectionController::class)->prefix('section')->group(function () {
        Route::post('section', [SectionController::class, 'store'])->name('section.store');
    });

    Route::controller(SubjectController::class)->prefix('subject')->group(function () {
        Route::post('subject', [SubjectController::class, 'store'])->name('subject.store');
    });

    Route::controller(RecordController::class)->prefix('record')->group(function () {
        Route::post('record', [RecordController::class, 'store'])->name('record.store');
    });
});

require __DIR__ . '/auth.php';
