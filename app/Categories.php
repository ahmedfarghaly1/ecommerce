<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    public $table="category";
    protected $fillable = [
        'category_name', 'image', 'parent',
    ];

    public function product()
    {
        return $this->belongsToMany('App\Products');
    }
}
