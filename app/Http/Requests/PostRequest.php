<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Post;

class PostRequest extends FormRequest
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
                'TituloNoti' => ' required',
                'InfoNoti' => ' required',
                'imagen' => ' required|mimes:jpg,jpeg,bmp,png',
        ];
    }
}
