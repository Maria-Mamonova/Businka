<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Авторизация разрешена
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    // Правила валидации/проверки для формы обратной связи
    public function rules(): array {
        return [
            'FirstName' => 'required|min:2|max:30|regex:/^[a-zA-Zа-яА-ЯёЁ]+$/u',
            'lastName' => 'required|min:2|max:30|regex:/^[a-zA-Zа-яА-ЯёЁ]+$/u',
            'email' => 'required|email:rfc,dns',
            'subject' => 'required|min:2|max:50',
            'message' => 'required|min:15|max:500'
        ];
    }

    // Сообщения об ошибках при валидации для формы обратной связи
    public function messages() {
        return [
            'FirstName.required' => 'Please enter your first name',
            'FirstName.min' => 'First name must be at least 2 characters',
            'FirstName.max' => 'First name must be less than 30 characters',
            'FirstName.regex' => 'First name must contain only letters',
            'lastName.required' => 'Please enter your last name',
            'lastName.min' => 'Last name must be at least 2 characters',
            'lastName.max' => 'Last name must be less than 30 characters',
            'lastName.regex' => 'Last name must contain only letters',
            'email.required' => 'Please enter your email address',
            'email.email' => 'Please enter a valid email address',
            'subject.required' => 'Please enter your subject',
            'subject.min' => 'Subject must be at least 2 characters',
            'subject.max' => 'Subject must be less than 50 characters',
            'message.required' => 'Please enter your message',
            'message.min' => 'Message must be at least 15 characters',
            'message.max' => 'Message must be less than 500 characters'
        ];
    }
}
