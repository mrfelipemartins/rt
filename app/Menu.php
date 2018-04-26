<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function links() {
      return $this->hasMany('App\MenuLink');
    }
}
