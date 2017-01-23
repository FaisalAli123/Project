<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
//defining the relationship between item and platform 
{
   protected $fillable=['name'];

   public function items()
   {
     return $this->hasMany(Item::class);
   }
}
