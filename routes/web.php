<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OtdelController;
use App\Http\Controllers\DolgnostController;
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
Route::get('/users', [UserController::class, 'views'])->name('users.views');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create')->middleware('can:adminManagerChek');
Route::post('/users', [UserController::class, 'add'])->name('users.add')->middleware('can:adminManagerChek');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show')->where('users', '[0-9]+');
Route::get ('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit')->where('users', '[0-9]+')->middleware('can:adminManagerChek');
Route::put ('/users/{user}', [UserController::class, 'update'])->name('users.update')->middleware('can:adminManagerChek');
Route::delete ('/users/{user}', [UserController::class, 'delete'])->name('users.delete')->middleware('can:adminChek');

Route::get('/otdels', [OtdelController::class, 'views'])->name('otdels.views');
Route::get('/otdels/create', [OtdelController::class, 'create'])->name('otdels.create')->middleware('can:adminManagerChek');
Route::post('/otdels', [OtdelController::class, 'add'])->name('otdels.add')->middleware('can:adminManagerChek');
Route::get('/otdels/{otdel}', [OtdelController::class, 'show'])->name('otdels.show')->where('otdels', '[0-9]+');
Route::get ('/otdels/{otdel}/edit', [OtdelController::class, 'edit'])->name('otdels.edit')->where('otdels', '[0-9]+')->middleware('can:adminManagerChek');
Route::put ('/otdels/{otdel}', [OtdelController::class, 'update'])->name('otdels.update')->middleware('can:adminManagerChek');
Route::delete ('/otdels/{otdel}', [OtdelController::class, 'delete'])->name('otdels.delete')->middleware('can:adminChek');

Route::get('/dolgnosts', [DolgnostController::class, 'views'])->name('dolgnosts.views');
Route::get('/dolgnosts/create', [DolgnostController::class, 'create'])->name('dolgnosts.create')->middleware('can:adminManagerChek');
Route::post('/dolgnosts', [DolgnostController::class, 'add'])->name('dolgnosts.add')->middleware('can:adminManagerChek');
Route::get('/dolgnosts/{dolgnost}', [DolgnostController::class, 'show'])->name('dolgnosts.show')->where('dolgnosts', '[0-9]+');
Route::get ('/dolgnosts/{dolgnost}/edit', [DolgnostController::class, 'edit'])->name('dolgnosts.edit')->where('dolgnosts', '[0-9]+')->middleware('can:adminManagerChek');
Route::put ('/dolgnosts/{dolgnost}', [DolgnostController::class, 'update'])->name('dolgnosts.update')->middleware('can:adminManagerChek');
Route::delete ('/dolgnosts/{dolgnost}', [DolgnostController::class, 'delete'])->name('dolgnosts.delete')->middleware('can:adminChek');

//Route::get('/{locale}', function ($locale) {
    //App::setLocale($locale);
    //return view('viewUsers');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
