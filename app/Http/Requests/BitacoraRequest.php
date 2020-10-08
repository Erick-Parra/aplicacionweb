<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\TblControloperativo;

class BitacoraRequest extends FormRequest
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
        'Fecha_Control' => ' required',
        'Encargado' => ' required',
        'Ubicacion' => ' required',
        'Turbiedad' => ' required',
        'Olor' => ' required',
        'Cloro' => ' required',
        'PH' => ' required',
        'Sabor' => ' required',
        'Temperatura' => ' required',
        'Observacion' => ' required',
        'Nom_Asada' => ' required',
        ];
    }
}
