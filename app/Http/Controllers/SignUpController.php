<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignUpRequest;
use App\Models\SignUp;
use Illuminate\Http\Request;

// Контроллер для обработки регистрации пользователей
class SignUpController extends Controller
{
    public function submit(SignUpRequest $req){

        // Получаем валидированные данные
        $data = $req->validated();

        // Хэшируем пароль перед сохранением
        $data['password'] = bcrypt($data['password']);

        // Создаем новую запись с хэшированным паролем
        SignUp::create($data);

        //Вернет сообщение об успешной регистрации
        return redirect()->back()->with('success', 'You have successfully registered');
    }
}
