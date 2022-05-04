<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaketCardStoreRequest extends FormRequest
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
        $rules = [];

        switch ($this->title) {
            case 'Лесные культуры':
                $rules = [
                    'year_created' => '',
                    'cultivation_method' => '',
                    'method_created' => '',
                    'distance_between' => '',
                    'distance_into' => '',
                    'seats_number' => '',
                    'condition' => '',
                    'cause' => '',
                ];
                break;
        }

        return $rules;
    }
}
