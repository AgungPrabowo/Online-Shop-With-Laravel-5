<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function kategori()
    {
    	return $this->belongsTo('App\Kategori');
    }
}
