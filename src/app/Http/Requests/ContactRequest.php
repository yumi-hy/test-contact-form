<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'in:男性,女性,その他'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'tel' => ['required', 'numeric', 'digits_between:10,11'],
            'address' => ['required', 'string', 'max:255'],
            'building' => 'nullable|string|max:255',
            'detail' => 'required|string|max:1000',
            'content' => 'nullable|string|max:1000',
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'max:255'],
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => '姓を入力してください',
            'last_name.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'tel.required' => '電話番号を入力してください',
            'address.required' => '住所を入力してください',
            'detail.required' => 'お問い合わせの種類を選択してください',
            'content.required' => 'お問い合わせ内容を入力してください',
            'name.required' => 'お名前を入力してください',
            'password.required' => 'パスワードを入力してください',
        ];
    }
}
