<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['user_id', 'name_lengkap', 'avatar', 'nrp', 'jenis_kelamin', 'asal_smu', 'kota_smu', 'alamat_kantor', 'alamat_rumah','phone'];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
