<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AsadasRequest extends FormRequest
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
            'Nom_Asada' => ' required',
            'Fecha_Registro'=> 'required',
            'ced_Juridica' => 'required|numeric',
            'Num_Convenio' => 'required|numeric',
            'Cant_Abonados' => 'required|numeric',
            'Fecha_Solicitud' => 'required',
            'Num_Sesion' => 'required|numeric',
            'Presidente' => 'required',
            'VicePresidente' => 'required',
            'Tesorero' => 'required',
            'Vocal_1' => 'required',
            'Vocal_2' => 'required',
            'Fiscal' => 'required',
            'Region' => 'required',
            'Razon_Afiliacion' => 'required',
            'Telefono' => 'required|numeric',
            'Correo' => 'required|email',
            
        ];
    }
}
