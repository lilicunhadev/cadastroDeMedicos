<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicoRequest extends FormRequest
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
            'nome'           => ['required', 'string', 'max:50'],
            'crm'            => ['required', 'string', 'max:10'],
            'telefone'       => ['required', 'string', 'max:15'],
            'especialidade1' => ['required', 'string', 'max:50'],
            'especialidade2' => ['required', 'string', 'max:50'],
            'especialidade3' => ['string', 'max:50'],
        ];
    }
}
