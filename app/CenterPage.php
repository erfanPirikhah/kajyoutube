<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CenterPage extends Model
{
    protected $fillable =['title','body','icon','lang','imageUrl','create_at','update_at'];

}
