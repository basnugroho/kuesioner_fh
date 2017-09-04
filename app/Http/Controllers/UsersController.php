<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use Session;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    } 

    public function index() {
        return view('admin.users.index')->with('users', User::all());
    }

    public function create() {
        return view('admin.users.create');
    }

    public function store(Request $request) {
        $user = User::create([
            'name' => $request->name, 
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_id' => 2
        ]);
        //create profile
        $profile = Profile::create([
            'user_id' => $user->id,
            'jenis_kelamin' => 2
        ]);

        //kalo nrp diisi
        if($request->nrp > 0) {
            $profile->nrp = $request->nrp;
            $profile->nama_lengkap = $request->name;
            $profile->save();
        }

        Session::flash('success', 'User Created');
        return redirect()->back();
    }

    public function profile ($id) {
        $user = User::find($id);
        $profile = $user->profile;

        if(!isset($user->profile)) {
            Profile::create([
                'user_id' => $user->id
            ]);
        }
        
        return view('admin.users.profile')->with('user', $user)
                                          ->with('profile', $profile);
    }

    public function update (Request $request, $id) {
        $profile = Profile::find($id);
        $profile->nama_lengkap = request()->nama_lengkap;
        $profile->user->name = request()->nama_lengkap;
        $profile->jenis_kelamin = request()->jenis_kelamin;
        $profile->asal_smu = request()->asal_smu;
        $profile->kota_smu = request()->kota_smu;
        $profile->alamat_kantor = request()->alamat_kantor;
        $profile->alamat_rumah = request()->alamat_rumah;
        $profile->phone = request()->phone;

        //save foto
        if($request->hasFile('avatar')) {
            $avatar = $request->avatar;
            $avatar_new_name = time()."_".$avatar->getClientOriginalName();
            $avatar->move('uploads/users/', $avatar_new_name);
            //delete avatar if exist
            if(count($profile->avatar) > 0) {
                unlink(public_path() . $profile->avatar); 
            }
            $profile->avatar = '/uploads/users/'.$avatar_new_name; //avatar data
        }
        $profile->save();
        Session::flash('success', 'User Profile Updated');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if(count($user->profile->avatar) > 0) {
            unlink(public_path() . $user->profile->avatar); 
        }

        $user->profile->delete();
        $user->delete();
        Session::flash('success', 'User deleted forever!');
        return redirect()->back();
    }

}
