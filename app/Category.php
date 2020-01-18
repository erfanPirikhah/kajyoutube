<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable =['name','lang','create_at','update_at'];

  public function sample()
  {
      return $this->belongsTo(Sample::class);
  }

}
