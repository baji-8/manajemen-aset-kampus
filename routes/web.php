<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaboratoriumController;

Route::get('/laboratorium', function () {
    return redirect()->route('laboratorium.index');
});

Route::resource('laboratorium', LaboratoriumController::class);
