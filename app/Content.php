<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Pishran\LaravelPersianSlug\HasPersianSlug;

class Content extends Model
{
    protected $fillable =['title','slug','body','lang','description','imageUrl','videoUrl','audioUrl','tags','create_at','update_at'];

    use HasPersianSlug;

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }


    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeSearch($query, $keyword)
    {
        $query->where('title', 'LIKE', '%'.$keyword.'%')
              ->orWhere('description', 'LIKE', '%'.$keyword.'%')
              ->orWhere('lang', 'LIKE', '%'.$keyword.'%')
              ->orWhere('body', 'LIKE', '%'.$keyword.'%');
        return $query;
    }
}
