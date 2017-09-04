<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PilihanJawaban extends Model
{
    protected $fillable = ['jawaban', 'pertanyaan_id', 'golongan_id'];
    public function pertanyaan() {
        return $this->belongsTo('App\Pertanyaan');
    }
}
