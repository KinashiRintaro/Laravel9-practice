<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegistPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'name.required' => '名前は必ず入力してください。',
            'name.max' => '名前は最大20文字まで入力できます。',
            'email.required' => 'メールアドレスは必ず入力してください。',
            'email.mail' => 'メールアドレスの形式が正しくありません。',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:20'],
            'email' => ['required', 'email', 'max:255'],
        ];
    }
}
