<?php

namespace App\Http\Requests\Card;

use Illuminate\Foundation\Http\FormRequest;

class ThirdCardStoreRequest extends FormRequest
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
            'thousands' => '',
            'height' => '',
            'age' => '',
            'koefOne' => '',
            'podrostOne' => '',
            'koefTwo' => '',
            'podrostTwo' => '',
            'koefThree' => '',
            'podrostThree' => '',
            'por' => '',
            'Oc' => '',
            'density' => '',
            'podlesokOne' => '',
            'podlesokTwo' => '',
            'podlesokThree' => '',
        ];
    }
}
