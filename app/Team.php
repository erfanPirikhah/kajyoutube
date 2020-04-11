<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable =['title','body','lang','icon','create_at','update_at'];

}
