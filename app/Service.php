<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = ['code', 'name', 'price', 'profit_percent', 'employee_percent', 'active', 'observation'];

    protected $hidden = ['created_at', 'updated_at'];
}
