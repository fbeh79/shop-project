<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\ForgetPasswordController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\course\CourseController;
use App\Http\Controllers\dashboard\SettingController;
use App\Http\Controllers\pages\AboutController;
use App\Http\Controllers\pages\ContactController;
use App\Http\Controllers\pages\HomeController;
use TCG\Voyager\Facades\Voyager;




Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class,'index'])->name('about');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact_post');


Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/courses/{slug}', [CourseController::class, 'show'])->name('single_course');


Route::prefix('auth')->group(function () {
    Route::get('/forget_password', [ForgetPasswordController::class, 'index'])->name('forget_password');
    Route::post('/forget_password', [ForgetPasswordController::class, 'update'])->name('forget_password_post');


    Route::get('/reset_password/{link}', [ForgetPasswordController::class, 'reset_password'])->name('reset_password');
    Route::post('/reset_password', [ForgetPasswordController::class, 'store'])->name('reset_password_post');

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login_post');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register_post');


    Route::prefix('admin')->group(function () {
        Voyager::Routes();
    });
});
