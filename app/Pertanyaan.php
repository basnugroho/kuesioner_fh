<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $fillable = ['pertanyaan', 'kuesioner_id'];

    public function kuesioners () {
        return $this->belongsTo('App\Kuesioner');
    }

    public function pilihan_jawabans() {
        return $this->hasMany('App\PilihanJawaban');
    }
}
