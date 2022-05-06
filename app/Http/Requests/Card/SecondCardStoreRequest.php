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
            'card_id' => '',
            'row.*.tier' => '',
            'row.*.coefComposition' => '',
            'row.*.speciesComposition' => '',
            'row.*.origin' => '',
            'row.*.age' => 'numeric',
            'row.*.height' => 'numeric',
            'row.*.diameter' => 'numeric',
            'row.*.class' => '',
            'row.*.density' => 'numeric',
            'row.*.g' => 'numeric',
            'row.*.stock' => 'numeric',
        ];
    }
}
