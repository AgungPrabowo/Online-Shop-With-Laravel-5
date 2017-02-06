<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $guarded = ['images'];

    public function kategori()
    {
    	return $this->belongsTo('App\Kategori');
    }
}
