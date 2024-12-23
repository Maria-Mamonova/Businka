<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


// Основной контроллер для управления страницами
class MainController extends Controller
{
    // Метод для обработки главной страницы (маршрут '/')
    // Возвращает представление "home.blade.php"
    public function home(){

        // Получаем список изображений из папки public/images
        $images = collect(File::files(public_path('images')))
            ->filter(fn($file) => in_array($file->getExtension(), ['jpg', 'jpeg', 'png', 'gif']))
            ->map(fn($file) => $file->getFilename())
            ->values();

        // Передаем данные в представление home
        return view('home', compact('images'));

    }

    // Метод для обработки страницы "О нас" (маршрут '/about')
    // Возвращает представление "about.blade.php"
    public function about(){
        return view('about');
    }

    // Метод для обработки страницы контактов (маршрут '/contact')
    // Возвращает представление "contact.blade.php"
    public function contact(){
        return view('contact');
    }

    // Метод для обработки страницы входа (маршрут '/login')
    // Возвращает представление "login.blade.php"
    public function login(){
        return view('login');
    }

    // Метод для обработки страницы регистрации (маршрут '/sign_up')
    // Возвращает представление "signup.blade.php"
    public function signup(){
        return view('signup');
    }
}
