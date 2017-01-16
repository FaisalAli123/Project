<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function notes()
    {

    return $this->hasMany(Note::class);

    }
  public function path()
  {

return '/games/' . $this->id;

  }
  public function addNote(Note $note, $userId)
  {
    $note->user_id = $userId;
  return $this->notes()->save($note);
  }

}
