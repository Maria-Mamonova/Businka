<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Модель для работы с данными формы регистрации
class SignUp extends Model
{
    // Таблица для работы с данными формы регистрации
    protected $table = 'signup';
    // Список атрибутов, которые разрешено массово заполнять.
    protected $fillable = ['name', 'emailSignUp', 'usernameSignUp','password'];
}
