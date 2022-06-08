<?php

namespace App\Http\Controllers;

use App\Models\Box;
use App\Models\Card;
use App\Models\HandBook;
use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class BoxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $rules = ['title' => 'required'];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('home.index')->withErrors($validator);
        }
            $input = $request->all();
            unset($input['_token']);
            $input['user_id'] = Auth::id();
            $box = Box::create($input);

        return redirect()->back()->with('succes', 'БД успешно создана');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Box $box, Request $request)
    {
        $cards = Card::where('box_id', $box->id)->with('first')->get();
        $handbooks = HandBook::where('user_id', \Auth::id())->orWhere('user_id', null)->get();
        return view('box.show', compact(['cards', 'box', 'handbooks']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Box $box
     * @return RedirectResponse
     */
    public function destroy(Box $box): RedirectResponse
    {
        $box->third()->delete();
        $box->second()->delete();
        $box->first()->delete();
        $box->card()->delete();
        $box->delete();
        return redirect()->back();
    }
}
