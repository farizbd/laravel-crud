<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = ['product_name','category_id','price','stoct'];

    public function category(){
      return $this->belongsTo('App\Category');
    }
}
