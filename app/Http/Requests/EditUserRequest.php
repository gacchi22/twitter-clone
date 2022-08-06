<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'editcomplete'){
            return true;
        } else {
            return false;            
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required','string','max:50'],
            'email' => ['required','string','email','max:50'],
            'tel_number' => ['nullable','string','regix:/^[0-9-]{10,13}$/'],
            'image_url' => ['nullable','string','max:50'],
            'profile' => ['nullable','string','max:50'],
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => '名前は必ず入力してください。',
            'name.max' => '名前は50文字以内で入力してください。',
            'email.required' => 'メールアドレスは必ず入力してください。',
            'email.email' => '有効なメールアドレスを入力してください。',
            'email.max' => 'メールアドレスは50文字以内で入力してください。',
            'tel_number.regix' => '電話番号は数字もしくは-で記入してください。',
            'image_url.max' => '画像URLは200文字以内としてください。',
            'profile.max' => 'プロフィールは200文字以内で入力してください。',
        ];
    }
}
