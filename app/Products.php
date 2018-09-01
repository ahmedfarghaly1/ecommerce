<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public $table="product";
    protected $fillable = [
        'name', 'image', 'size', 'category_id', 'user_id', 'price','countities','type'
    ];

    public function category()
    {
     
        return $this->belongsTo('App\Categories');

    }

    
    public function user()
    {
     
        return $this->belongsTo('App\User');

    }
}
