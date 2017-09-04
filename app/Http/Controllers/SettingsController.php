<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use Session;

class SettingsController extends Controller
{
    public function setting () {
        return view('admin.settings.setting')->with('setting', Setting::first());
    }

    public function update ($id) {

        $setting = Setting::find($id);
        $setting->site_name = request()->site_name;
        $setting->tagline = request()->tagline;
        $setting->about = request()->about;
        $setting->email = request()->email;
        $setting->facebook = request()->facebook;
        $setting->instagram = request()->instagram;
        $setting->twitter = request()->twitter;
        $setting->address = request()->address;
        $setting->phone = request()->phone;
        $setting->save();
        Session::flash('success', 'Setting Saved!');
        return redirect()->route('setting');
    }
}
