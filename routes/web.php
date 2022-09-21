<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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

// 入力画面表示
Route::get('/index', [FormController::class, 'index'])->name('index');

Route::post('/confirm', [FormController::class, 'confirm'])->name('confirm');

Route::match(['get', 'post'], '/confirm', [FormController::class, 'confirm'])->name('confirm');

Route::post('/thanks', [FormController::class, 'thanks'])->name('thanks');
