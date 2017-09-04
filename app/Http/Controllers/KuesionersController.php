<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KuesionersController extends Controller
{
    public function kuesionerA () {
        return view ('kuesioners.kuesioner_a');
    }
    public function kuesionerB () {
        return view ('kuesioners.kuesioner_a');
    }
    public function kuesionerC () {
        return view ('kuesioners.kuesioner_a');
    }
    public function kuesionerD () {
        return view ('kuesioners.kuesioner_a');
    }
    public function kuesionerE () {
        return view ('kuesioners.kuesioner_e');
    }
    public function kuesionerHukum () {
        return view ('kuesioners.kuesioner_hukum');
    }
}
