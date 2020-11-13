<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IngresoFormRequest extends FormRequest
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
            'id_proveedor'      => 'required',
            'tipocomprobante'   => 'required|max:20',
            'seriecomprobante'  => 'required|max:10',
            'numcomprobante'    => 'required|max:10',
            'id_producto'       => '',
            'lote'              => '',
            'cantidad'          => '',
            'precio_costo'      => '',
            'precio_venta'      => ''
        ];
    }
}
