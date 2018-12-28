<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allFiles = Card::all();


        return view('pages.searchCard')->with('document', $allFiles);
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
        return view('pages.addCard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $filename = $request->file->getClientOriginalName();
            $filesize = $request->file->getClientSize();
            $request->file->storeAs('public/upload', $filename);
        $card = new Card;
        $card->serialNumber= $request->serialNumber;
        $card->owner=$request->cardowner;
        $card->type=$request->cardtype;
        $card->image = $filename;
        $card->size = $filesize;
        $card->save();
        return redirect('/searchCard')->with('success','Saved !');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show( $card)
    {
        //
        $card = Card::find($card);

        return view('pages.showindividualcard')->with('card', $card);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Card  $card
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
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Card $card)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        //
    }
}
