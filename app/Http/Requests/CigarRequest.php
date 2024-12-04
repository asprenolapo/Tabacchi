<!-- <?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CigarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:5|max:40',
            'madein' => 'required|min:3|max:30',
            'price' => 'required|numeric|min:2',
            'tripa' => 'required|min:5',
            'description' => 'required|min:5|max:150',
            'img' => 'image|max:2048'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Il campo nome è obbligatorio',
            'name.min' => 'Il nome deve essere lungo almeno 5 caratteri',
            'name.max' => 'Il nome non può essere più lungo di 40 caratteri',

            'madein.required' => 'Il campo provenienza è obbligatorio',
            'madein.min' => 'Il provenineza deve essere lungo almeno 3 caratteri',
            'madein.max' => 'Il provenineza non può essere più lungo di 30 caratteri',

            'price.required' => 'Il campo prezzo è obbligatorio',
            'price.numeric' => 'Il prezzo deve essere un numero',
            'price.min' => 'Il prezzo deve essere almeno 2',


            'tripa.required' => 'Il campo tripa è obbligatorio',
            'tripa.min' => 'La tripa deve essere almeno di 5 caratteri',

            'description.required' => 'Il campo descrizione è obbligatorio',
            'description.min' => 'la descrizione deve essere lunga almeno 5 caratteri',
            'description.max' => 'La descrizione non può essere più lungo di 150 caratteri',

            'img.image' => 'Il file caricato non è un\'immagine',
            'img.max' => 'La dimensione massima del file caricato è 2MB',

        ];
    }
} -->
