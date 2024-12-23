<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
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
    // Правила валидации/проверки для формы регистрации
    public function rules(): array
    {
        return [
            'name' => 'required|min:2|max:30|regex:/^[a-zA-Zа-яА-ЯёЁ]+$/u',
            'emailSignUp' => 'required|email:rfc,dns|unique:signup,emailSignUp',
            'usernameSignUp' => 'required|max:32|unique:signup,usernameSignUp',
            'password' => 'required|min:8|confirmed',
        ];
    }

    // Сообщения об ошибках при валидации для формы регистрации
    public function messages() {
        return [
            'name.required' => 'Please enter your name',
            'name.min' => 'Name must be at least 2 characters',
            'name.max' => 'Name must be less than 30 characters',
            'name.regex' => 'Name must contain only letters',
            'emailSignUp.required' => 'Please enter your email address',
            'emailSignUp.email' => 'Please enter a valid email address',
            'emailSignUp.unique' => 'This email is already in use',
            'usernameSignUp.required' => 'Please enter your username',
            'usernameSignUp.max' => 'Username must be less than 32 characters',
            'usernameSignUp.unique' => 'This username is already in use',
            'password.required' => 'Please enter your password',
            'password.min' => 'Password must be at least 8 characters',
            'password.confirmed' => 'Passwords do not match',
        ];
    }
}
