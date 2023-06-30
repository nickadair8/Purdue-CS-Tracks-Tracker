<?php

use App\Http\Controllers\TrackClassesController;
use App\Models\TrackClass;
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

Route::get('/', [TrackClassesController::class, 'index']);

// Route::get('/select', function () {
//     return view('select');
// });