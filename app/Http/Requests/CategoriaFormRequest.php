<?php

namespace sisVentas\Http\Requests;

use sisVentas\Http\Requests\Request;

class CategoriaFormRequest extends Request
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
                    'nombre'=>'required|max:50|unique:categoria,nombre',
                    'descripcion'=>'max:256',
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'nombre'=>'required|max:50',
                    'descripcion'=>'max:256',
                ];
            }
        }
    }
}
