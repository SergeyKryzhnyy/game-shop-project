<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

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



Route::get('/', [GameController::class, 'indexAction'])->name('index');

Route::get('news', [GameController::class, 'newsAction'])->name('news');

Route::get('about', [GameController::class, 'aboutAction'])->name('about');

Route::get('order', [GameController::class, 'orderAction'])->name('order');

Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');

//Route::post('Register', [RegisteredUserController::class, 'create'])->name('Register');

Route::get('RegisterForm', [GameController::class, 'registerAction'])->name('RegisterForm');

require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
