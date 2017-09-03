<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuesioner extends Model
{
    protected $fillable = ['judul'];

    public function pertanyaans() {
        return $this->hasMany('App\Pertanyaan');
    }

    public function getPertanyaan($nomorUrut) {
        return $this->pertanyaans->where('nomor_urut',$nomorUrut)->first()->pertanyaan;
    }

    public function getPertanyaanId($nomorUrut) {
        return $this->pertanyaans->where('nomor_urut',$nomorUrut)->first()->pertanyaan;
    }

    public function jawabans() {
        return $this->hasManyThrough('App\PilihanJawaban', 'App\Pertanyaan');
    }
}
