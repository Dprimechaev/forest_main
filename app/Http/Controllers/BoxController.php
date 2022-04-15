<?php

namespace App\Http\Controllers;

use App\Models\Box;
use App\Models\Card;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class BoxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = ['title' => 'required'];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('home.index')->withErrors($validator);
        } else {
            $input = $request->all();
            unset($input['_token']);
            $input['user_id'] = \Auth::id();
            $box = Box::create($input);
            return redirect()->back()->with('succes', 'БД успешно создана');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Box $box, Request $request)
    {
        $cards = Card::where('box_id', $box->id)->with('first')->get();
        return view('box.show', compact(['cards', 'box']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
