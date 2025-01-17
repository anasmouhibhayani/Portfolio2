<?php


use App\Http\Controllers\ContactController;
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




Route::get('/', function () {
    return view('index');
});

// routes/web.php
Route::post('contact',[ContactController::class, 'create']);

Route::get('/tabel',[ContactController::class, 'index']);

// routes/web.php


