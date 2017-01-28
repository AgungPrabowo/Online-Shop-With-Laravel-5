<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
  // whitelist
  protected $fillable = ['email','password'];

  protected $hidden = ['password', 'remember_token',];
}
