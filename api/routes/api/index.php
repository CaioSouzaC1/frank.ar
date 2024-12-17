<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/auth')->group(callback: base_path('/routes/api/auth.php'));
Route::prefix('/franchisee')->group(callback: base_path('/routes/api/franchisee.php'));
Route::prefix('/franchise')->group(callback: base_path('/routes/api/franchise.php'));

