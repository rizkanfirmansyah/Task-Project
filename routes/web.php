<?php

use App\Http\Controllers\CustomAuthController;
// use App\Http\Controllers\Auth\CustomAuthController;
use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\PajakController;
use App\Http\Controllers\ChallengeDetailController;
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

Auth::routes();
Route::get('/', function () {
    return view('index')->name('home');
});


// Route::get('/auth/login', [loginController::class, 'index'])->name('login');
// Route::post('/auth/login/post', [loginController::class, 'login'])->name('login-in');
// Route::get('/auth/logout', [AuthController::class, 'destroy'])->name('logout');
// Route::get('auth/register', [AuthController::class, 'daftar'])->name('index-register');
// Route::post('auth/register/post', [AuthController::class, 'register'])->name('register');

// Route::middleware(['auth'])->group(function () {

// Route::middleware(['auth', 'user-access:user'])->group(function () {
//     Route::get('/', function () {
//         return view('index');
//     });
// });


    Route::middleware(['auth', 'user-access:admin'])->group(function () {
        Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard'); 
    });

    Route::get('login', [CustomAuthController::class, 'index'])->name('login');
    Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
    Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
    Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
    Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
  

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
        Route::get('/cetak', [UserController::class, 'cetak_pdf'])->name('user-print');
        Route::delete('/', [UserController::class, 'destroy'])->name('user-destroy');
        Route::put('/change/status', [UserController::class, 'change'])->name('user-change');
    });

    Route::prefix('taxes')->group(function () {
        Route::get('/', [PajakController::class, 'index'])->name('taxes');
        Route::get('/{id}', [PajakController::class, 'edit'])->name('taxes-edit')->where('id', '[0-9]+');
        Route::get('/create', [PajakController::class, 'create'])->name('taxes-create');
        Route::get('/show', [PajakController::class, 'show'])->name('taxes-show');
        Route::post('/', [PajakController::class, 'store'])->name('taxes-store');
        Route::post('/{id}', [PajakController::class, 'update'])->name('taxes-update')->where('id', '[0-9]+');
        Route::delete('/', [PajakController::class, 'destroy'])->name('taxes-destroy');
    });

    Route::prefix('question')->group(function () {
        Route::get('/', [QuestionController::class, 'index'])->name('question');
        Route::get('/{id}', [QuestionController::class, 'edit'])->name('question-edit')->where('id', '[0-9]+');
        Route::get('/create', [QuestionController::class, 'create'])->name('question-create');
        Route::get('/show', [QuestionController::class, 'show'])->name('question-show');
        Route::post('/', [QuestionController::class, 'store'])->name('question-store');
        Route::post('/{id}', [QuestionController::class, 'update'])->name('question-update')->where('id', '[0-9]+');
        Route::delete('/', [QuestionController::class, 'destroy'])->name('question-destroy');
    });

    Route::prefix('challenge-detail')->group(function () {
        Route::get('/', [ChallengeDetailController::class, 'index'])->name('challenge-detail');
        Route::get('/{id}', [ChallengeDetailController::class, 'edit'])->name('challenge-detail-edit')->where('id', '[0-9]+');
        Route::get('/create', [ChallengeDetailController::class, 'create'])->name('challenge-detail-create');
        Route::get('/show', [ChallengeDetailController::class, 'show'])->name('challenge-detail-show');
        Route::post('/', [ChallengeDetailController::class, 'store'])->name('challenge-detail-store');
        Route::post('/{id}', [ChallengeDetailController::class, 'update'])->name('challenge-detail-update')->where('id', '[0-9]+');
        Route::delete('/', [ChallengeDetailController::class, 'destroy'])->name('challenge-detail-destroy');
    });
// });
