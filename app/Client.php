<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'clients';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['identificator', 'name', 'lastname', 'mobile', 'email', 'address', 'telephone',
        'birthday', 'sex', 'recommendedby', 'discount', 'clientsince', 'lastvisit', 'photo', 'observation', 'sendmail' ];

    protected $hidden = ['created_at', 'updated_at'];
}
