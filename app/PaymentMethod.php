<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $table = 'payment_methods';

    protected $fillable = ['name', 'active', 'observation', 'paymenttype_id'];

    protected $hidden = ['id', 'created_at', 'update_at'];

    public function paymenttype()
    {
        $this->belongsTo('App\PaymentType');
    }
}
