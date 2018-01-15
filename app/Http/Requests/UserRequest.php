<?php

namespace LaraUsers\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $data = $this->all();

        return [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => (!$data['id'] ? 'required|' : '') . 'max:255',
            'login' => 'required|max:255' . (!$data['id'] ? '|unique:users' : '|unique:users,login,' . $data['id'])
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Informe o nome do usuário',
            'name.max' => 'O limite para o campo nome é de 255 caracteres',
            'email.required' => 'Informe o email do usuário',
            'email.email' => 'Informe um email válido',
            'email.max' => 'O limite para o campo email é de 255 caracteres',
            'login.required' => 'Informe o login do usuário',
            'login.unique' => 'Login já definido para outro usuário',
            'login.max' => 'O limite para o campo login é de 255 caracteres',
            'password.required' => 'Informe a senha do usuário',
            'password.max' => 'O limite para o campo senha é de 255 caracteres'
        ];
    }
}
