<?php

namespace App\Http\Controllers\pages;

use App\Card;
use App\Note;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotesController extends Controller
{
  public function store(Request $request, Card $card) {
    $this->validate($request, ['body' => 'required|min:10']);
    $note = new Note($request->all());
    $note->user_id = 1;
    /*$note->card_id = $card->id;
    $note->save();*/
    // $card->notes()->save($note);
    /*$card->addNote(
      new Note($request->all())
    );*/
    $card->addNote($note);
    return back();
    // return $card;
    // return $request->all();
  }

  public function edit(Note $note) {
    return view('pages.notes.edit', compact('note'));
  }

  public function update(Request $request, Note $note) {
    $note->update($request->all());
    return redirect('cards/' . $note->card_id);
  }
}
