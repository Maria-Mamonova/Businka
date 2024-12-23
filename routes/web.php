<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SignUpController;


//Отслеживание основной страницы через контроллер
Route::get('/', [MainController::class, 'home'])->name('home');

//Отслеживание страницы о нас через контроллер
Route::get('/about', [MainController::class, 'about'])->name('about');

//Отслеживание страницы обратной связи через контроллер
Route::get('/feedback', [MainController::class, 'contact'])->name('contact');

//Отслеживание отправки обратной связи через контроллер
Route::post('/contact/submit',  [ContactController::class, 'submit'])->name('feedback');

//Отслеживание страницы входа через контроллер
Route::get('/login', [MainController::class, 'login'])->name('login');

//Отслеживание страницы регистрации через контроллер
Route::get('/signup', [MainController::class, 'signup'])->name('signup');

//Отслеживание регистрации через контроллер
Route::post('/signup/submit',  [SignUpController::class, 'submit'])->name('registered');
