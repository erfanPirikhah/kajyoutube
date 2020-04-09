<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable =['title','url','chid','status','lang','sort','create_at','update_at'];

}
