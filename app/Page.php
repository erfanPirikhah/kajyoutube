<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable =['title','url','body','imageUrl','videoUrl','audioUrl','create_at','update_at'];

    public function getRouteKeyName()
    {
        return 'url';
    }
}
