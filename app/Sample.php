<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    protected $fillable =['name','category_id','body','lang','imageUrl','videoUrl','create_at','update_at'];

    public function category()
    {
       return $this->belongsTo(Category::class);
    }

    public function scopeSearch($query, $keyword)
    {
        $query->where('name','LIKE', '%'.$keyword.'%')
        ->orWhere('category','LIKE', '%'.$keyword.'%')
        ->orWhere('lang','LIKE', '%'.$keyword.'%');


        return $query;

    }
}
