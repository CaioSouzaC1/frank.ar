<?php

use App\Http\Controllers\FranchiseUnitController;
use Illuminate\Support\Facades\Route;

Route::middleware(['type:admin', 'auth.api'])->controller(FranchiseUnitController::class)->group(function () {
    Route::post('/', 'store');
    Route::delete('/{id}', action: 'destroy');
    Route::put('/{id}', action: 'update');
    Route::get('/{id}', 'show');
    Route::get('/', 'index');
});
