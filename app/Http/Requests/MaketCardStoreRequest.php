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
            case 'Повреждение насаждения':
                $rules = [
                    'damage_type' => '',
                    'damage_year' => '',
                    'damaged_tree' => '',
                    'disease_type' => '',
                    'disease_damage' => '',
                    'pest_type' => '',
                    'pest_damage' => '',
                ];
                break;
            case 'Земли линейного протяжения':
                $rules = [
                    'width' => '',
                    'length' => '',
                    'state' => '',
                    'road_purpose' => '',
                    'coating_type' => '',
                    'roadway_width' => '',
                    'seasonality' => '',
                ];
                break;
            case 'Травянистые растения':
                $rules = [
                    'accounting_category' => '',
                    'herbal_plants' => '',
                    'first_plants' => '',
                    'first_coverage' => '',
                    'second_plants' => '',
                    'second_coverage' => '',
                    'third_plants' => '',
                ];
                break;
            case 'Выолненные хозяйственные мероприятия':
                $rules = [
                    'event' => '',
                    'year' => '',
                    'tree' => '',
                    'stock' => '',
                    'analysis' => '',
                    'performance' => '',
                    'reason_performance' => '',
                ];
                break;
            case 'Недревесное сырье':
                $rules = [
                    'material_category' => '',
                    'tree_type' => '',
                    'age' => '',
                    'height' => '',
                    'measurement_unit' => '',
                    'yield' => '',
                    'harvest_availability' => '',
                ];
                break;
            case 'Сельскохозяйственное угодье':
                $rules = [
                    'width' => '',
                    'length' => '',
                    'state' => '',
                    'road_purpose' => '',
                    'coating_type' => '',
                    'roadway_width' => '',
                    'seasonality' => '',
                ];
                break;
            case 'Подсочка':
                $rules = [
                    'width' => '',
                    'length' => '',
                    'state' => '',
                    'road_purpose' => '',
                    'coating_type' => '',
                    'roadway_width' => '',
                    'seasonality' => '',
                ];
                break;
            case 'Болото':
                $rules = [
                    'width' => '',
                    'length' => '',
                    'state' => '',
                    'road_purpose' => '',
                    'coating_type' => '',
                    'roadway_width' => '',
                    'seasonality' => '',
                ];
                break;
            case 'Потери древесины':
                $rules = [
                    'width' => '',
                    'length' => '',
                    'state' => '',
                    'road_purpose' => '',
                    'coating_type' => '',
                    'roadway_width' => '',
                    'seasonality' => '',
                ];
                break;
            case 'Рекреационная характеристика':
                $rules = [
                    'width' => '',
                    'length' => '',
                    'state' => '',
                    'road_purpose' => '',
                    'coating_type' => '',
                    'roadway_width' => '',
                    'seasonality' => '',
                ];
                break;
            case 'Сад':
                $rules = [
                    'width' => '',
                    'length' => '',
                    'state' => '',
                    'road_purpose' => '',
                    'coating_type' => '',
                    'roadway_width' => '',
                    'seasonality' => '',
                ];
                break;
            case 'Особенности выдела':
                $rules = [
                    'width' => '',
                    'length' => '',
                    'state' => '',
                    'road_purpose' => '',
                    'coating_type' => '',
                    'roadway_width' => '',
                    'seasonality' => '',
                ];
                break;
            case 'Характеристика почв':
                $rules = [
                    'width' => '',
                    'length' => '',
                    'state' => '',
                    'road_purpose' => '',
                    'coating_type' => '',
                    'roadway_width' => '',
                    'seasonality' => '',
                ];
                break;
            case 'Плантация, древесная школа':
                $rules = [
                    'width' => '',
                    'length' => '',
                    'state' => '',
                    'road_purpose' => '',
                    'coating_type' => '',
                    'roadway_width' => '',
                    'seasonality' => '',
                ];
                break;
            case 'Селекционная оценка':
                $rules = [
                    'width' => '',
                    'length' => '',
                    'state' => '',
                    'road_purpose' => '',
                    'coating_type' => '',
                    'roadway_width' => '',
                    'seasonality' => '',
                ];
                break;
            case 'Земли линейного протяжения':
                $rules = [
                    'width' => '',
                    'length' => '',
                    'state' => '',
                    'road_purpose' => '',
                    'coating_type' => '',
                    'roadway_width' => '',
                    'seasonality' => '',
                ];
                break;
            case 'Данные предыдущего лесойстройства':
                $rules = [
                    'width' => '',
                    'length' => '',
                    'state' => '',
                    'road_purpose' => '',
                    'coating_type' => '',
                    'roadway_width' => '',
                    'seasonality' => '',
                ];
                break;
            case 'Доступность для хозйственного воздействия':
                $rules = [
                    'width' => '',
                    'length' => '',
                    'state' => '',
                    'road_purpose' => '',
                    'coating_type' => '',
                    'roadway_width' => '',
                    'seasonality' => '',
                ];
                break;
            case 'Гидролесомелиорация':
                $rules = [
                    'width' => '',
                    'length' => '',
                    'state' => '',
                    'road_purpose' => '',
                    'coating_type' => '',
                    'roadway_width' => '',
                    'seasonality' => '',
                ];
                break;
            case 'Коплексная оценка кедровников':
                $rules = [
                    'width' => '',
                    'length' => '',
                    'state' => '',
                    'road_purpose' => '',
                    'coating_type' => '',
                    'roadway_width' => '',
                    'seasonality' => '',
                ];
                break;
        }

        return $rules;
    }
}
