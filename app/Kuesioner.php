<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuesioner extends Model
{
    protected $fillable = ['judul'];

    public function pertanyaans() {
        return $this->hasMany('App\Pertanyaan');
    }
}
