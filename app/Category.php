<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

	use Notifiable;
      protected $fillable = [
        'cname', 'cdis','cslug',
    ];

     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'cname', 'remember_token',
    ];
}
