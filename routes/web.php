<?php

use App\Http\Controllers\Admin\GeneralController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
require_once ('admin.php');
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/about', function () {
//     return view('about');
// });

Route::controller(GeneralController::class)->group(function () {
    Route::get('/','about');
    Route::get('/pengalaman','exp');//
    Route::get('/hidup','awards');
    Route::get('/skill','skill');
    Route::get('/perintah','education');
    Route::get('/kelakuan','interests');

});