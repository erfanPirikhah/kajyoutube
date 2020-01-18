<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable =['lastName','firstName','email','mobile','category_id','price','body','create_at','update_at'];

    public function category()
    {
       return $this->belongsTo(Category::class);
    }

    
}
