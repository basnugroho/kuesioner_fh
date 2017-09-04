<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respon extends Model
{
    protected $fillable = ['user_id', 'kuesioner_id', 'pertanyaan_id', 'pilihan_jawaban_id', 'jawaban_text'];
    public function users () {
        return $this->belongsToMany('App\User');
    }
}
