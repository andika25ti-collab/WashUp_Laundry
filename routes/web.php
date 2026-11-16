<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'washup')->name('landing');
Route::view('/admin/dashboard', 'admin.dashboard')->name('admin.dashboard');
