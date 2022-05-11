<?php

namespace App\Http\Controllers;

use App\Http\Requests\HandBookStoreRequest;
use App\Models\HandBook;
use Illuminate\Http\Request;

class HandBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $handbooks = HandBook::where('user_id', \Auth::id())->orWhere('user_id', null)->get();
        return view('handbook.index', ['handbooks' => $handbooks]);
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
    public function store(HandBookStoreRequest $handBookStoreRequest, HandBook $handBook)
    {
//        dd($handBookStoreRequest->all());
        $validated = $handBookStoreRequest->validated();
        $handBook->create($validated + ['user_id' => \Auth::id()]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HandBook  $handBook
     * @return \Illuminate\Http\Response
     */
    public function show(HandBook $handBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HandBook  $handBook
     * @return \Illuminate\Http\Response
     */
    public function edit(HandBook $handBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HandBook  $handBook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HandBook $handBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HandBook  $handBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(HandBook $handBook)
    {
        //
    }
}
