<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
  protected $fillable = ['title', 'body'];
  public function notes() {
    return $this->hasMany('App\Note');
    // return $this->hasMany(Note::class);
  }

  public function addNote(Note $note) {
    return $this->notes()->save($note);
  }
}
