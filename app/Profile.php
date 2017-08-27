<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['nrp', 'alamat', 'tanggal_lahir', 'jenis_kelamin', 'phone', 'facebook', 'instagram'];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
