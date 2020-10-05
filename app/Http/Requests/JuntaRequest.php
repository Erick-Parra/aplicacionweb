<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JuntaRequest extends FormRequest
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
            'Presidente' => ' required',
            'vicePresidente' => ' required',
            'Secretario' => ' required',
            'Tesorero' => ' required',
            'Vocal' => ' required',
            'Suplente1' => ' required',
            'Suplente2' => ' required',
            'Fiscal' => ' required',
        ];
    }
}
