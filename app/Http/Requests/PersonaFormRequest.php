<?php

namespace sisVentas\Http\Requests;

use sisVentas\Http\Requests\Request;
use sisVentas\Persona;

class PersonaFormRequest extends Request
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
                    'nombre'=>'required|max:100',
                    'tipo_documento'=>'required|max:20',
                    'num_documento'=>'required|numeric',
                    'direccion'=>'max:70',
                    'telefono'=>'numeric',
                    'email'=>'Required|Between:3,64|Email|Unique:persona|email'
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'nombre'=>'required|max:100',
                    'tipo_documento'=>'required|max:20',
                    'num_documento'=>'required|numeric',
                    'direccion'=>'max:70',
                    'telefono'=>'numeric',
                    'email'=>'Required|Between:3,64|Email'
                ];
            }
        }
    }
}
