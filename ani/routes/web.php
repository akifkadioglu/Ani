<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\remembranceController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Models\User;
use GuzzleHttp\Middleware;
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


Route::get('/', [HomeController::class, "home"])->name("home");
Route::get('/kayit-ol', [LoginController::class, "signupform"])->name("signupform");
Route::post('/kayit-et', [LoginController::class, "signup"])->name("signup");

Route::get('/giris-formu', [LoginController::class, "loginform"])->name("login");
Route::post('/giris-yap', [LoginController::class, "login"])->name("loginform");

Route::post('/cik', [LoginController::class, "logout"])->name("logout");

Route::get("ani-formu", [remembranceController::class, "remembranceform"])->middleware("auth")->name("remembranceform");
Route::post("ani-ekle", [remembranceController::class, "remembrance"])->middleware("auth")->name("remembrance");

Route::get('kullanici-duzenle/{username}', [UserController::class, 'editform'])->middleware('auth')->name('editform');
Route::post('kullanici-duzenlendi/{id}', [UserController::class, 'edit'])->middleware('auth')->name('edit');


Route::get('ani-duzenle/{slug}', [remembranceController::class, 'editremembranceform'])->middleware('auth')->name('editremembranceform');
Route::post('ani-duzenlendi/{id}', [remembranceController::class, 'editremembrance'])->middleware('auth')->name('editremembrance');


Route::post('yorum-ekle/{id}', [ReviewController::class, 'addReview'])->middleware('auth')->name('addreview');
Route::get('yorum-sil/{id}', [ReviewController::class, 'delete'])->middleware('auth')->name('deleteReview');


Route::get("hesap/{username}", [UserController::class, "account"])->name("account");

Route::get('ani/{slug}', [remembranceController::class, "getRemember"])->name("ani");

Route::get('sil/{id}', [remembranceController::class, 'delete'])->name('sil');
