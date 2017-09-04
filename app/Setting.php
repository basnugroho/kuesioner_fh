<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['site_name', 'tagline', 'about', 'email', 'facebook', 'instagram', 'twitter', 'address', 'phone'];
}
