<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;

   

    
    Route::get('/projects', [ProjectsController::class, 'index'])->name('projects.index');
    Route::get('/create', [ProjectsController::class, 'create'])->name('projects.create');
    Route::post('/create', [ProjectsController::class, 'store'])->name('projects.store');
    Route::get('/projects/{project}/edit', [ProjectsController::class, 'edit'])->name('projects.edit');
    Route::post('/projects/{project}', [ProjectsController::class, 'update'])->name('projects.update');
    Route::delete('/delete', [ProjectsController::class, 'destroy'])->name('projects.destroy');


   







