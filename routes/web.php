<?php

use App\Http\Controllers\Administrator\AboutController;
use App\Http\Controllers\administrator\CounterController;
use App\Http\Controllers\Administrator\HeroController;
use App\Http\Controllers\Administrator\IntroController;
use App\Http\Controllers\Administrator\ServiceController;
use App\Http\Controllers\Administrator\teamController;
use App\Http\Controllers\Administrator\topHeaderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrator\userController;
use App\Http\Controllers\Front\HomeController;

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

Route::view('/', 'front.index')
->name('home');

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/dashboard/users', userController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/dashboard/topHeader', topHeaderController::class)->parameters(['topHeader'=>'id']);
    Route::resource('/dashboard/hero', HeroController::class)->parameters(['hero' => 'id']);
    Route::resource('/dashboard/about', AboutController::class)->parameters(['about'=>'id']);
    Route::resource('/dashboard/intro', IntroController::class)->parameters(['intro' => 'id']);
    Route::resource('/dashboard/service', ServiceController::class)->parameters(['service' => 'id']);
    Route::resource('/dashboard/counter', CounterController::class)->parameters(['counter' => 'id']);
    Route::resource('/dashboard/team', teamController::class)->parameters(['team' => 'id']);
});


require __DIR__.'/auth.php';
