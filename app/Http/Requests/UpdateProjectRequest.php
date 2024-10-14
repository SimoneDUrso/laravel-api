<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:20',
            'date' => 'required|date',
            'type_id' => 'nullable|exists:types,id',
            'description' => 'max:1000',
            'image_project' => 'max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il nome del progetto è obbligatorio',
            'name.max' => 'Il nome del progetto deve essere lungo al massimo 20 caratteri',
            'date.required' => 'La data della creazione del progetto è obbligatoria',
            'date.date' => 'Per favore, inserire una data valida',
            'type_id' => 'Il tipo selezionato non esiste',
            'description.max' => 'Hai superato il limite massimo di caratteri, per favore sii più breve',
            'image_project.max' => "L'URL del progetto deve essere lungo al massimo 255 caratteri",
        ];
    }
}
