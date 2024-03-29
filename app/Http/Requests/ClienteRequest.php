<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'razaoSocial' => 'required|min:3',
            'cpf_cnpj' => 'required|min:11|max:14',
            'situacao' => 'required',
            'telefone' => 'required|size:11',
            'dataCadastro' => 'date',
        ];
    }
}
