<?php

use App\Http\Controllers\Backoffice\SchoolController;
use Illuminate\Support\Facades\Route;


Route :: middleware([])->prefix('admin')->name('admin.')->group(function(){
  Route::controller(SchoolController::class)->prefix ('school')->name ('school.')->group(function () {
    Route::get('/','index')->name ('index');
    Route::get('/create','create')->name ('create');
    Route::post('/store','store')->name ('store');
    Route::get('/{id}/edit','edit')->name ('edit');
    Route::put('/{id}/update','update')->name ('update');
    Route::delete('/{id}/destroy','destroy')->name ('destroy');

 });

});

