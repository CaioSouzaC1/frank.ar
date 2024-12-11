<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/auth')->group(callback: base_path('/routes/api/auth.php'));
Route::prefix('/franchisee')->group(callback: base_path('/routes/api/franchisee.php'));
