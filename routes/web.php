<?php
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/crud', [StudentsController::class, 'index']);


Route::post('/student/store', [StudentsController::class, 'store']);
Route::get('/students/edit/{student_id}', [StudentsController::class, 'edit']);


Route::get('/students/delete/{student_id}', [StudentsController::class, 'delete']);