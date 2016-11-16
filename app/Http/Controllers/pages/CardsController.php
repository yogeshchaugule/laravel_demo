<?php

namespace App\Http\Controllers\pages;

// use DB;
use App\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CardsController extends Controller {
  public function index() {
    // $cards = DB::table('cards')->get();
    $cards = Card::all();
    $content = 'Your Cards goes here.';
    return view('pages.cards.index', compact('content', 'cards'));
  }

  /*public function show($card_id) {
    $card = Card::find($card_id);
    $title = $card->title;
    $content = 'Your Cards description goes here.';
    return view('pages.cards.show', compact('content', 'card', 'title'));
  }*/

  public function show(Card $card) {
    // return $card->load('notes');
    $title = $card->title;
    $content = (!empty($card->body) ? $card->body : '');
    /*if (!empty($card->body)) {
      $content = $card->body;
    }
    else {
      $content = '';
    }*/

    return view('pages.cards.show', compact('content', 'card', 'title'));
  }

  public function store(Request $request) {
    $this->validate($request, ['title' => 'required']);
    $card = new Card($request->all());
    $card->save();
    return back();
  }

  public function edit(Card $card) {
    return view('pages.cards.edit', compact('card'));
  }

  public function update(Request $request, Card $card) {
    $card->update($request->all());

    return redirect("cards");
  }

  public function delete() {
    // $card = \App\Card::find(1)->notes()->delete();
  }
}
