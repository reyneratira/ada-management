<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => redirect('/dashboard'));

Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');
Route::get('/data-kapster', fn() => view('data_kapster'))->name('data.kapster');
Route::get('/ubah-jadwal', fn() => view('ubah_jadwal'))->name('ubah.jadwal');
Route::get('/outlet', fn() => view('outlet'))->name('outlet');
