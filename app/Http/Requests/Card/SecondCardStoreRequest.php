<?php

namespace App\Http\Requests\Card;

use Illuminate\Foundation\Http\FormRequest;

class SecondCardStoreRequest extends FormRequest
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
            'tier' => '',
            'coefComposition' => '',
            'speciesComposition' => '',
            'origin' => '',
            'age' => 'numeric',
            'height' => 'numeric',
            'diameter' => 'numeric',
            'class' => 'numeric',
            'density' => 'numeric',
            'g' => 'numeric',
            'stock' => 'numeric',
        ];
    }
}
