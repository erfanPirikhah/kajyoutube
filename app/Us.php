<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Us extends Model
{
    protected $fillable =['name','email','mobile','description','body','create_at','update_at'];
}
