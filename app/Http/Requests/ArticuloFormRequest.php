<?php

namespace sisVentas\Http\Requests;

use sisVentas\Http\Requests\Request;

class ArticuloFormRequest extends Request
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
        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'idcategoria'=>'required',
                    'codigo'=>'required|Unique:articulo|max:50',
                    'nombre'=>'required|max:100',
                    'stock'=>'required|numeric',
                    'descripcion'=>'max:512',
                    'imagen'=>'mimes:jpeg,bmp,png'
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'idcategoria'=>'required',
                    'codigo'=>'required|max:50',
                    'nombre'=>'required|max:100',
                    'stock'=>'required|numeric',
                    'descripcion'=>'max:512',
                    'imagen'=>'mimes:jpeg,bmp,png'
                ];
            }
        }
    }
}
