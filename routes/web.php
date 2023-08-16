<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/laporan', [ReportController::class, 'index']);
Route::get('/download-html1', [ReportController::class, 'downloadHtml'])->name('downloadHtml2021');
Route::get('/download-html2', [ReportController::class, 'downloadHtml2'])->name('downloadHtml2022');



