<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title' => 'required|max:255',
            'description' => 'required|max:1000',
            'thumb' => 'required|url',
            'price' => 'required|max:10',
            'series' => 'required|max:255',
            'type' => 'required|in:comic book,graphic novel',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Il titolo è richiesto.',
            'title.max' => 'Il titolo non può superare i 255 caratteri',
            'description.required' => 'Aggiungi una descrizione al fumetto.',
            'description.max' => 'La descrizione non può superare i 1000 caratteri',
            'thumb.required' => 'Inserisci una URL per l\'immagine di copertina.',
            'thumb.url' => 'Inserisci una URL valida.',
            'price.required' => 'Il prezzo è richiesto.',
            'price.max' => 'Il prezzo non può superare i 10 caratteri',
            'series.required' => 'Inserisci la serie a cui appartiene il fumetto.',
            'series.max' => 'Il nome della serie non può superare i 255 caratteri',
            'type.in' => 'Seleziona uno dei tipi possibili.',
        ];
    }
}
