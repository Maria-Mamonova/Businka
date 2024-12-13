<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

// Контроллер для обработки отправки письма
class ContactController extends Controller {

    public function submit(ContactRequest $req){

        // Создание новой записи в базе данных на основе валидированных данных
        Contact::create($req->validated());

        //Вернет сообщение об успешной отправке письма
        return redirect()->back()->with('success', 'Your message has been sent successfully');
    }
}
