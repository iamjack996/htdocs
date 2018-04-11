<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menus_sub extends Model
{
    protected $table = 'Menus_sub';
    protected $fillable = ['title','url','order','Menus_id'];

    public function menus()
    {
        return $this->belongsTo('App\Menus');
    }
}
