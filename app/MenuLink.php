<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuLink extends Model
{
    public function child() {
      return $this->hasMany('App\MenuLink', 'parent_id');
    }

    public function parent() {
      return $this->belongsTo('App\MenuLink', 'parent_id');
    }
}
