<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\ChallengeDetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\UserController;
use App\Models\Challenge;
use App\Models\Question;
use Database\Factories\ChallengeDetailFactory;
use Illuminate\Routing\RouteGroup;
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

Route::get('/auth/login', [AuthController::class, 'index'])->name('login');
Route::post('/auth/login/post', [AuthController::class, 'login'])->name('login-in');
Route::get('/auth/logout', [AuthController::class, 'destroy'])->name('logout');
Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/about', [HomeController::class, 'about'])->name('homepage-about');
Route::get('/contact', [HomeController::class, 'contact'])->name('homepage-contact');
Route::get('/service', [HomeController::class, 'service'])->name('homepage-service');
Route::get('/register', [HomeController::class, 'register'])->name('homepage-register');
Route::get('/information', [HomeController::class, 'information'])->name('homepage-information');

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('contents.dashboard.index');
    })->name('dashboard');

    Route::prefix('section')->group(function () {
        Route::get('/', [SectionController::class, 'index'])->name('section');
        Route::get('/{id}', [SectionController::class, 'edit'])->name('section-edit')->where('id', '[0-9]+');
        Route::get('/create', [SectionController::class, 'create'])->name('section-create');
        Route::get('/show', [SectionController::class, 'show'])->name('section-show');
        Route::post('/', [SectionController::class, 'store'])->name('section-store');
        Route::post('/{id}', [SectionController::class, 'update'])->name('section-update')->where('id', '[0-9]+');
        Route::delete('/', [SectionController::class, 'destroy'])->name('section-destroy');
        Route::put('/change/status', [SectionController::class, 'change'])->name('section-change');
    });

    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('users');
        Route::get('/{id}', [UserController::class, 'edit'])->name('user-edit')->where('id', '[0-9]+');
        Route::get('/create', [UserController::class, 'create'])->name('user-create');
        Route::get('/show', [UserController::class, 'show'])->name('user-show');
        Route::post('/', [UserController::class, 'store'])->name('user-store');
        Route::post('/{id}', [UserController::class, 'update'])->name('user-update')->where('id', '[0-9]+');
        Route::delete('/', [UserController::class, 'destroy'])->name('user-destroy');
    });
});
