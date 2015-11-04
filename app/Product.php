<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['code', 'name', 'section', 'product_provider_id', 'price', 'stock', 'active'];

    public function productProvider()
    {
        return $this->belongsTo('App\ProductProvider');
    }
}
