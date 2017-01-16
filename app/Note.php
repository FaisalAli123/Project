<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
protected $fillable = ['body'];

public function game()
{
return $this->belongsTo(Game::class);
}
public function user()
{
  return $this->belongsTo(User::class);
}
}
