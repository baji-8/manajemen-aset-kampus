<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaboratoriumController;

Route::get('/laboratorium', function () {
    return redirect()->route('laboratorium.index');
});


Route::get('/laboratorium/export-pdf', [LaboratoriumController::class, 'exportPDF'])->name('laboratorium.export.pdf');

Route::resource('laboratorium', LaboratoriumController::class);
