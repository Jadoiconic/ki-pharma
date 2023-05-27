<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineController;

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
    return view('welcome');
});
//stock management
Route::get('/medecine', [MedicineController::class, 'index']);
Route::post('/medecine/store', [MedicineController::class, 'store']);
Route::get('/medecine/store', [MedicineController::class, 'store']);
Route::get('/medecine/delete/{id}', [MedicineController::class, 'destroy']);

Route::get('/admindashboard', function () {
    return view('admin.welcome');
});

Route::get('/users', function () {
    return view('admin.users');
});
Route::get('/report', function () {
    return view('admin.reports');
});
Route::get('/userprofile', function () {
    return view('admin.profile');
});

Route::get('/logout', function () {
    return redirect('/');
});

