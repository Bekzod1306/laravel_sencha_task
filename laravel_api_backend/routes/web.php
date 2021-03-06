<?php

use App\Http\Controllers\Admin\CategoryController;

use App\Http\Controllers\Api\HistoryController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/',[App\Http\Controllers\Admin\HomeController::class,'index'])->name('homeAdmin');
    
});

