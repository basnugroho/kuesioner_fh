<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use Mail;
use Session;

class ContactsController extends Controller
{
    public function contactAdmin (Request $request) {

        //dd($request->all());
        $data = [
            'name' => $request->name,
            'title' => $request->email,
            'phone' => $request->phone,
            'content' => $request->message
        ];
    
        //dd($data);

        Mail::send('emails.test', $data, function($message) {
            $message->to('s6134117@student.ubaya.ac.id', 'Admin')->subject('Alumni FH');
        });
        Session::flash('success', 'email terkirim, kami akan segera merespon email anda');
        return redirect()->back();
    }
}
