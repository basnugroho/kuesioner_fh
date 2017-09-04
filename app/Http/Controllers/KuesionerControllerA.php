<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Respon;

class KuesionerControllerA extends Controller
{
    public function store(){
        //dd($jawaban = request()->all());
        $length = count(request()->pertanyaan_id);
        $pertanyaan_id = request()->pertanyaan_id;
        $respon = Respon::all();
        for ($i = 0; $i < $length; $i++) {
            Respon::create([
                'user_id' => 1,
                'kuesioner_id' => 1,
                'pertanyaan_id' => $pertanyaan_id[$i]
            ]);            
        }

        //rdo save
        // $respon = Respon::all();
        // $respon->find(260)->pilihan_jawaban_id->save('1');
        //dd($respon->where('pertanyaan_id', 1)->first()->pilihan_jawaban_id);
        // Respon::where('pertanyaan_id', 3)->pilihan_jawaban_id = request()->jawaban_id3;
        // Respon::where('pertanyaan_id', 4)->pilihan_jawaban_id = request()->jawaban_id4;
        // Respon::where('pertanyaan_id', 5)->pilihan_jawaban_id = request()->jawaban_id5;
        // Respon::where('pertanyaan_id', 6)->pilihan_jawaban_id = request()->jawaban_id6;
        // Respon::where('pertanyaan_id', 8)->pilihan_jawaban_id = request()->jawaban_id8;
        // Respon::where('pertanyaan_id', 9)->pilihan_jawaban_id = request()->jawaban_id9;
        // Respon::where('pertanyaan_id', 10)->pilihan_jawaban_id = request()->jawaban_id10;
        // Respon::where('pertanyaan_id', 13)->pilihan_jawaban_id = request()->jawaban_id13;
        //$respon->save();
        return redirect()->back();
    }
}
