<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
//Defining the relationship between item and platform
{

    protected $fillable=['name','price','edition','description','image','platform_id'];

    public function platform()
    {
      $this->belongsTo(Platform::class);
    }
}
