<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{
    protected $table = 'payment_types';

    protected $fillable = ['name', 'active', 'observation'];

    protected $hidden = ['id', 'created_at', 'update_at'];

    public function paymentmethods()
    {
        $this->hasMany('App\PaymentMethod');
    }
}
