<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KuesionersController extends Controller
{
    public function kuesionerA () {
        return view ('kuesioners.kuesioner_a');
    }
}
