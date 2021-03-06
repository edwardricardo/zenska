<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['code', 'name', 'price', 'stock', 'active', 'observation'];

    protected $hidden = ['created_at', 'updated_at'];

}
