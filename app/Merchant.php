<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Merchant extends Authenticatable
{
    public $table = 'mt_merchant';
    public $timestamps = false;

   protected $guard = 'admin';

    protected $fillable = [
         'username', 'password',
    ];
	 protected $hidden = [
        'password',
    ];
}
