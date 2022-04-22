<?php

namespace App\Http\Requests\Card;

use Illuminate\Foundation\Http\FormRequest;

class FirstCardStoreRequest extends FormRequest
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
            'card_id' => '',//
            'box_id' => 'required', //+
            'republic' => 'required', //+ республика
            'region' => 'required', //+ район
            'district' => 'required', //+ участковое лесничество
            'quarter' => 'required', //+ квартал
            'distance' => '', //+ расст вывозки
            'renter' => '', //+ арендатор
            'number' => 'required', //+ номер выдела
            'area' => 'required', //+ площадь
            'earthCategory' => '', //+ категория земель required
            'protectionCategory' => '', //+ категория защитности required
            'cutWay' => '', //+категория рубки
            'ozu' => '', //+ ОЗУ
            'height' => '', //+ Высота
            'exposition' => '', //+ Экспозиция
            'slope' => '', //+ крутизна
            'erozionForm' => '', //+ вид эрозии
            'erozionDegree' => '', //+ степень эрозии
            'firstEvent' => '', //+ мероприятие 1
            'percent' => '', //+ % выбора
            'firstPtk' => '', //+ РТК 1
            'secondEvent' => '', //+ мероприятие 2
            'secondPtk' => '', //+ РТК 2
            'thirdEvent' => '', //+ мероприятие 3
            'thirdPtk' => '', //+ РТК 3
            'target' => '', //+ целевая порода
            'dominantBreed' => '', // преобладающая порода
            'bonitetClass' => '', // класс бонитета
            'forestType' => '', // тип леса
            'tlu' => '', // ТЛУ
            'fireDangeros' => '', // Класс пожарной опасности
            'cutYear' => '', // Год рубки
            'allStump' => '', // всего пней
            'pineStump' => '', // пней сосны
            'stumpDiameter' => '', // Диаметр пней
            'cutType' => '', // тип рубки
            'littering' => '', // захламление
            'liquid' => '', // ликвидная древесина
            'deadwood' => '', // сухостой
        ];
    }
}
