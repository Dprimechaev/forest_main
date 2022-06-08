<?php

namespace App\Http\Controllers;

use App\Http\Requests\Card\FirstCardStoreRequest;
use App\Http\Requests\Card\SecondCardStoreRequest;
use App\Http\Requests\Card\ThirdCardStoreRequest;
use App\Http\Requests\MaketCardStoreRequest;
use App\Models\AgriculturalLand;
use App\Models\AvailabilityImpact;
use App\Models\Box;
use App\Models\Card;
use App\Models\CedarForest;
use App\Models\ForestCulture;
use App\Models\Garden;
use App\Models\HerbaceousPlants;
use App\Models\Hydroforestry;
use App\Models\LinearLands;
use App\Models\NonwoodMaterials;
use App\Models\PerformedActivities;
use App\Models\Pivot;
use App\Models\PreviousInventory;
use App\Models\RecreationalCharacteristic;
use App\Models\Second;
use App\Models\SelectionFeatures;
use App\Models\SelectionIndicators;
use App\Models\SoilCharacteristic;
use App\Models\StandDamage;
use App\Models\Swamp;
use App\Models\Third;
use App\Models\TreeScale;
use App\Models\WoodLoss;
use Illuminate\Http\Request;
use PHPUnit\Exception;
use Symfony\Component\Console\Input\Input;

class CardController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(FirstCardStoreRequest $cardRequest, SecondCardStoreRequest $secondCardStoreRequest,
                          ThirdCardStoreRequest $thirdCardStoreRequest, MaketCardStoreRequest $maketCardStoreRequest, Box $box)
    {
        try {
            /*values for first zone*/
            $firstValidated = $cardRequest->validated();
            $card = Card::create(['box_id' => $firstValidated['box_id']]);
            unset($firstValidated['box_id']);
            $card->first()->create($firstValidated);
            /*values for second zone*/
            $secondValidated = $secondCardStoreRequest->validated();
            $rows = $secondCardStoreRequest->row;
            foreach ($rows as $key => $values)
            {
                $rows[$key]['card_id'] = $card->id;
            }
            foreach ($rows as $row)
            {
                Second::create($row);
            }
            /*values for third zone*/
            $thirdValidated = $thirdCardStoreRequest->validated();
            $thirdValidated['card_id'] = $card->id;
            Third::create($thirdValidated);
            /*values for makets*/
            $maketValidated = $maketCardStoreRequest->validated();
            $maketValidated['card_id'] = $card->id;
            switch ($maketCardStoreRequest->title){
                case 'Повреждение насаждения':
                    StandDamage::create($maketValidated);
                    break;
                case 'Лесные культуры':
                    ForestCulture::create($maketValidated);
                    break;
                case 'Земли линейного протяжения':
                    LinearLands::create($maketValidated);
                    break;
                case 'Травянистые растения':
                    HerbaceousPlants::create($maketValidated);
                    break;
                case 'Выполненные хозяйственные мероприятия':
                    PerformedActivities::create($maketValidated);
                    break;
                case 'Недревесное сырье':
                    NonwoodMaterials::create($maketValidated);
                    break;
                case 'Сельскохозяйственное угодье':
                    AgriculturalLand::create($maketValidated);
                    break;
                case 'Подсочка':
                    Pivot::create($maketValidated);
                    break;
                case 'Болото':
                    Swamp::create($maketValidated);
                    break;
                case 'Потери древесины':
                    WoodLoss::create($maketValidated);
                    break;
                case 'Рекреационная характеристика':
                    RecreationalCharacteristic::create($maketValidated);
                    break;
                case 'Сад':
                    Garden::create($maketValidated);
                    break;
                case 'Особенности выдела':
                    SelectionFeatures::create($maketValidated);
                    break;
                case 'Характеристика почв':
                    SoilCharacteristic::create($maketValidated);
                    break;
                case 'Плантация, древесная шкала':
                    TreeScale::create($maketValidated);
                    break;
                case 'Селекционная оценка':
                    SelectionIndicators::create($maketValidated);
                    break;
                case 'Данные предыдущего лесоустройства':
                    PreviousInventory::create($maketValidated);
                    break;
                case 'Доступность для хозяйственного воздействия':
                    AvailabilityImpact::create($maketValidated);
                    break;
                case 'Гидролесомелиорация':
                    Hydroforestry::create($maketValidated);
                    break;
                case 'Коплексная оценка кедровников':
                    CedarForest::create($maketValidated);
                    break;
            }

        } catch (Exception $e){
            return back()->withInput()->withErrors($e->getMessage());
        }
        return redirect()->back();
  }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show(Card $card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit(Card $card)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Card $card)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Card $card)
    {
        try {
            $card->first()->delete();
            $card->second()->delete();
            $card->third()->delete();
            $card->deleteOrFail();
        } catch (Exception $e){
            return redirect()->back()->withErrors($e->getMessage());
        }
        return redirect()->back();
    }
}
