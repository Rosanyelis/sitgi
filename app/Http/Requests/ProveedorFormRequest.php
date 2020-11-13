<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProveedorFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'rif'           => 'required|max:11',
            'razon_social'  => 'required|max:50',
            'nombre'        => 'required|max:50',
            'telefono'      => 'required|max:12|numeric',
            'direccion'     => 'required|max:60',
            'correo'        => 'required|max:50',
        ];
    }
}
