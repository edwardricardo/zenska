<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'employees';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['identificator', 'name', 'lastname', 'mobile', 'email', 'address', 'telephone',
        'birthday', 'sex', 'employeesince', 'photo', 'observation'];

    protected $hidden = ['created_at', 'updated_at'];
}
