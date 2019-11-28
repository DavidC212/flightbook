<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewFlight extends FormRequest
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
            'date' => 'required|date|before:tomorrow',
            'glider_id' => 'required|integer',
            'nature_id' => 'required|integer',
            'board_function_id' => 'required|integer',
            'double_control' => ['required','regex:/^(?:(?:([01]?\d|2[0-3]):)?([0-5]?\d):)?([0-5]?\d)$/'],
            'captain' => ['required','regex:/^(?:(?:([01]?\d|2[0-3]):)?([0-5]?\d):)?([0-5]?\d)$/'],
            'instructor' => ['required','regex:/^(?:(?:([01]?\d|2[0-3]):)?([0-5]?\d):)?([0-5]?\d)$/'],
        ];
    }

    /**
     * Messages d'erreur.
     *
     * @return array
     */
    public function message()
    {
        return [
            'date.required' => 'La date est requise',
            'glider_id.required' => 'Vous devez sélectionner un planeur',
            'nature.required' => 'Vous devez sélectionner la nature du vol',
            'board_function_id.required' => 'Vous devez sélectionner votre fonction à bord',
            'double_control.required' => 'Un temps de vol est requis',
            'double_control.regex' => 'Le format de temps doit être respecté',
            'captain.required' => 'Un temps de vol est requis',
            'captain.regex' => 'Le format de temps doit être respecté',
            'instructor.required' => 'Un temps de vol est requis',
            'instructor.regex' => 'Le format de temps doit être respecté',
        ];
    }
}
