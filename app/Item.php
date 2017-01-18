<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    protected $fillable=['name','price','edition','description','image','platform_id'];

    public function platform()
    {
      $this->belongsTo(Platform::class);
    }
}
