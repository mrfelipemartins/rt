<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    public function items() {
      return $this->hasMany('App\BlockItem');
    }
}
