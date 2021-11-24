<?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;
    use Illuminate\Validation\Rules\Password;

    class RegisterRequest extends FormRequest
    {
        public function rules (): array
        {
            return [
                "name" => "required|string|max:30|min:3",
                "email" => "required|string|max:100",
                "password" => [
                    "required",
                    "string",
                    "max:255",
                    "confirmed",
                    Password::min(8)
                        ->letters()
                        ->mixedCase()
                        ->numbers()
                        ->symbols()
                ],
            ];
        }

        public function messages (): array
        {
            return [
                "name.required" => "The name field is required...",
                "name.string" => "The name field must be a string...",
                "name.max" => "The name field can't be grater than 255 characters in length.",
                "name.min" => "The name field must be at least 3 characters in length.",
                "email.required" => "The email field is required.",
                "email.string" => "The email field must be a string.",
                "email.max" => "The email field can't be greater than 255 characters in length.",
                "password.required" => "The password field is required.",
                "password.string" => "The password field must be a string",
                "password.max" => "The password field can't be grater than 255 characters in length",
                "password_confirm.required" => "The password field is required.",
                "password_confirm.string" => "The password field must be a string",
                "password_confirm.max" => "The password field can't be grater than 255 characters in length",
            ];
        }
    }
