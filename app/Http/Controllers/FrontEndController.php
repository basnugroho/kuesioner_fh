<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kuesioner;
use App\Setting;

class FrontEndController extends Controller
{
    public function index () {
        return view('index')->with('kuesioner_a', Kuesioner::find(1))
                            ->with('kuesioner_b', Kuesioner::find(2))
                            ->with('kuesioner_c', Kuesioner::find(3))
                            ->with('kuesioner_d', Kuesioner::find(4))
                            ->with('kuesioner_e', Kuesioner::find(5))

                            ->with('setting', Setting::first());
    }
}

