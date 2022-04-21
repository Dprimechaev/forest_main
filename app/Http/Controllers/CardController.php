<?php

namespace App\Http\Controllers;

use App\Http\Requests\Card\FirstCardStoreRequest;
use App\Http\Requests\Card\SecondCardStoreRequest;
use App\Http\Requests\Card\ThirdCardStoreRequest;
use App\Models\Box;
use App\Models\Card;
use Illuminate\Http\Request;
use PHPUnit\Exception;
use Symfony\Component\Console\Input\Input;

class CardController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(FirstCardStoreRequest $cardRequest, SecondCardStoreRequest $secondCardStoreRequest,
                          ThirdCardStoreRequest $thirdCardStoreRequest, Box $box)
    {
        try {
            /*values for first zone*/
            $firstValidated = $cardRequest->validated();
            $card = Card::create(['box_id' => $firstValidated['box_id']]);
            unset($firstValidated['box_id']);
            $card->first()->create($firstValidated);
            /*values for second zone*/
            $secondValidated = $secondCardStoreRequest->validated();
            $card->second()->create($secondValidated);
            /*values for second zone*/
            $thirdValidated = $thirdCardStoreRequest->validated();
            $card->third()->create($thirdValidated);
        } catch (Exception $e){
            return back()->withInput()->withErrors($e->getMessage());
        }
        return redirect()->back();
  }
//    public function store(Request $request)
//    {
//        dd($request->all());
//    }

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
