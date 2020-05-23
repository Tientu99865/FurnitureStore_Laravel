<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    //
    protected $table = "Menus";

    public function categories(){
        return $this->belongsTo('App\Categories','cat_id','id');
    }

    public function menus(){
        return $this->hasMany(Menus::class);
    }

    public function childrenMenus(){
        return $this->hasMany(Menus::class)->with('menus');
    }

}
