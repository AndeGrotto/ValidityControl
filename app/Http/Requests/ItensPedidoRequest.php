<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItensPedidoRequest extends FormRequest
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
            'quantidadeItem' => 'required|integer|min:0',
            'valorTotal' => 'required',
            'produto_id' => 'required',
            'pedido_id' => 'required',
        ];
    }
}
