<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\ProfileController;
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

Route::get('/menu', [CategorieController::class, "index"])->name("menu");
Route::get('/plat/{categorie}', [CategorieController::class, "plats"])->name("plats_categorie");

Route::get('/dashboard',[DashbordController::class, "index"])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::view("login", "auth.login")->middleware("guest");
Route::view("register", "auth.register")->middleware("guest");
require __DIR__.'/auth.php';
