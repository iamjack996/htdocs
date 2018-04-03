<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'Category';
    protected $fillable = ['name'];

    public function posts()
    {
        return $this->hasMany('App\Posts', 'category_id', 'id');
    }
}
