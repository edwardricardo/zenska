<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{
    protected $table = 'paymenttypes';

    protected $fillable = ['code', 'name', 'active', 'observation'];

    protected $hidden = ['id', 'created_at', 'update_at'];
}
