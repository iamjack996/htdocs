<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    protected $table = 'Menus';
    protected $fillable = ['title','url','order'];

    public function menus_sub()
    {
        return $this->hasMany('App\Menus_sub', 'menus_id', 'id');
    }
}
