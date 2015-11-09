<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductProvider extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'product_providers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['identificator', 'name', 'telephone', 'fax', 'email', 'url', 'contact',
        'address', 'payment', 'discount', 'bank', 'bank_account', 'observation'];

    protected $hidden = ['created_at', 'updated_at'];


    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
