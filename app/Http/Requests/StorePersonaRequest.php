<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePersonaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;// se cambia de false a true para que cualquier 
                    //para permitir usar el Request a cualquier usuario
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {   //reglas que debe tener los campos
        return [
            'nombre' => 'required|string|max:60',
            'apellido' => 'required|string|max:60',
            'fecha_nac' => 'required|date'
        ];
    }
}
