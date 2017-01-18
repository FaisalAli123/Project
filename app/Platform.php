<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
   protectd $fillable=['name'];

   public function items()
   {
     return $this->hasMany(Item::class);
   }
}
