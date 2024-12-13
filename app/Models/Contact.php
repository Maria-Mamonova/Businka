<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


// Модель для работы с данными формы обратной связи
class Contact extends Model
{
    // Список атрибутов, которые разрешено массово заполнять.
    protected $fillable = ['FirstName', 'lastName', 'email', 'subject', 'message'];
}
