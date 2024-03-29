<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\ClassroomManagementController;
use App\Http\Controllers\RecordController;

// Route::get('/', function () {
//     return view('welcome');
// });

// home page //

//Route::get('/', function () {
//return view('welcome');
//});

//Route::get('/classroommanagement', function (){
//   return view('classroommangement');
//});
//Route::get('/file', function (){
//    return view('file');
//});

Route::get('/', [HomepageController::class, 'index'])->name('homepage.index');
Route::get('/classroommanagement', [HomepageController::class, 'classroom'])->name('classroom.index');

Route::get('/dashboard', function () {
    return view('admin_panel.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::controller(ProcessController::class)->group(function () {
        Route::resource('process', ProcessController::class);
        Route::get('process/{processId}/sections', [ProcessController::class, 'sections'])->name('section.index');
        Route::get('process/{processId}/sections/{sectionId}/subjects', [ProcessController::class, 'subjects'])->name('subject.index');
        Route::get('process/{processId}/sections/{sectionId}/subjects/{subjectId}/records', [ProcessController::class, 'records'])->name('record.index');
        // Route::get('process/{processId}/sections/{sectionId}/subjects/{subjectId}/records/{recordId}', [ProcessController::class, 'viewRecord'])->name('record.index');
    });

    Route::controller(SectionController::class)->prefix('section')->group(function () {
        Route::post('section', [SectionController::class, 'store'])->name('section.store');
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
