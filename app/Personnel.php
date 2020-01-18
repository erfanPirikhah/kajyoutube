<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personnel extends Model
{
    protected $fillable =['name','body','lang','post','imageUrl','create_at','update_at'];
}
