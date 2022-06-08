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
                    'square' => '',
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
                    'land_user' => '',
                    'land_quality' => '',
                    'pasture_type' => '',
                    'land_condition' => '',
                    'land_overgrowing' => '',
                    'overgrowing_percentage' => '',
                    'hayfield_yield' => '',
                ];
                break;
            case 'Подсочка':
                $rules = [
                    'breeding_start' => '',
                    'planned_end' => '',
                    'actual_completion' => '',
                    'planting_condition' => '',
                    'condition_reason' => '',
                    'diagram_number' => '',
                    'violation_technology' => '',
                    'chemical_stimulant' => '',
                ];
                break;
            case 'Болото':
                $rules = [
                    'swamp_type' => '',
                    'swamp_vegetation' => '',
                    'layer_thickness' => '',
                    'overgrowing_rock' => '',
                    'swamp_overgrowing' => '',
                ];
                break;
            case 'Потери древесины':
                $rules = [
                    'loss_category' => '',
                    'loss_location' => '',
                    'breed' => '',
                    'stock_total' => '',
                    'liquid_stock' => '',
                    'commercial_stock' => '',
                    'loss_square' => '',
                ];
                break;
            case 'Рекреационная характеристика':
                $rules = [
                    'landscape_type' => '',
                    'aesthetic_class' => '',
                    'recreational_class' => '',
                    'stability_class' => '',
                    'passability_degree' => '',
                    'viewability' => '',
                    'degradation_stages' => '',
                    'improvement_elements' => '',
                ];
                break;
            case 'Сад':
                $rules = [
                    'garden_categor' => '',
                    'bookmark_year' => '',
                    'garden_breed' => '',
                    'between_rows' => '',
                    'row_spacing' => '',
                    'trees_number' => '',
                    'fruit_bearing' => '',
                    'garden_yield' => '',
                ];
                break;
            case 'Особенности выдела':
                $rules = [
                    'first_peculiarity' => '',
                    'second_peculiarity' => '',
                    'third_peculiarity' => '',
                    'fourth_peculiarity' => '',
                    'fifth_peculiarity' => '',
                    'sixth_peculiarity' => '',
                    'seventh_peculiarity' => '',
                    'eighth_peculiarity' => '',
                ];
                break;
            case 'Характеристика почв':
                $rules = [
                    'soil_type' => '',
                    'mechanical_composition' => '',
                    'soil_moisture' => '',
                    'turf_degree' => '',
                    'soil_power' => '',
                    'output_percentage' => '',
                ];
                break;
            case 'Плантация, древесная шкала':
                $rules = [
                    'plantation_appointment' => '',
                    'plantation_year' => '',
                    'plantation_between' => '',
                    'plantation_into' => '',
                    'plantation_number' => '',
                ];
                break;
            case 'Селекционная оценка':
                $rules = [
                    'selection_indicators' => '',
                ];
                break;
            case 'Данные предыдущего лесоустройства':
                $rules = [
                    'partition_number' => '',
                    'partation_square' => '',
                    'partation_category' => '',
                    'partation_coefficient' => '',
                    'partation_dominant' => '',
                    'partation_main' => '',
                    'partation_completeness' => '',
                    'projected_event' => '',
                ];
                break;
            case 'Доступность для хозяйственного воздействия':
                $rules = [
                    'availability' => '',
                    'transport_type' => '',
                    'tracks_distance' => '',
                ];
                break;
            case 'Гидролесомелиорация':
                $rules = [
                    'drainage_network' => '',
                    'commissioning_year' => '',
                    'old_category' => '',
                    'tree_species' => '',
                    'dryer_distance' => '',
                    'dryers_between' => '',
                    'growth_class' => '',
                ];
                break;
            case 'Коплексная оценка кедровников':
                $rules = [
                    'complex_type' => '',
                    'yield_score' => '',
                    'biological_harvest' => '',
                    'complex_rank' => '',
                    'resin_productivity' => '',
                    'cedar_stock' => '',
                    'fir_stock' => '',
                ];
                break;
        }

        return $rules;
    }
}
