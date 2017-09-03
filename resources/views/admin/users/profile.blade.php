@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <b>Edit Profile</b>
        </div>
        <div class="panel-body">
            <form action="{{ route('user.profile.update', ['id' => $profile->id ]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name Lengkap (dengan gelar)</label>
                    <input type="text" name="nama_lengkap" class="form-control" value="{{ $user->name }}" required>
                </div>
                <div class="form-group">
                    <label for="avatar">Unggah/GantiFoto</label>
                    <input type="file" name="avatar" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label for="nrp">NRP</label>
                    <input type="number" name="nrp" class="form-control" value="{{ $profile->nrp ? $profile->nrp : '' }}" {{ Auth::user()->role_id == 1 ? "":'disabled'}}>
                </div>
                <div class="form-group">
                    <label for="nrp">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $user->email ? $profile->email : '' }}" {{ Auth::user()->role_id == 1 ? "":'disabled'}}>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin">
                        <option value="2" {{ $profile->jenis_kelamin == 2 ? 'selected' : "" }}> 
                            Silahkan pilih: 
                        </option>
                        <option value="0" 
                            {{ $profile->jenis_kelamin == 0 ? 'selected' : "" }}>
                            Wanita 
                        </option>
                        <option value="1" 
                            {{ $profile->jenis_kelamin == 1 ? 'selected' : "" }}>
                            Pria
                        </option>
                </select>
                </div>
                <div class="form-group">
                    <label for="asal_smu">Asal SMU</label>
                    <input type="text" name="asal_smu" class="form-control" value="{{ $profile->asal_smu }}">
                </div>
                <div class="form-group">
                    <label for="kota_smu">Kota SMU</label>
                    <input type="text" name="kota_smu" class="form-control" value="{{ $profile->kota_smu }}">
                </div>
                <div class="form-group">
                    <label for="alamat_kantor">Alamat Kantor</label>
                    <input type="text" name="alamat_kantor" class="form-control" value="{{ $profile->alamat_kantor }}">
                </div>
                <div class="form-group">
                    <label for="alamat_rumah">Alamat Rumah</label>
                    <input type="text" name="alamat_rumah" class="form-control" value="{{ $profile->alamat_rumah }}">
                </div>
                <div class="form-group">
                    <label for="phone">Telepon</label>
                    <input type="number" name="phone" class="form-control" value="{{ $profile->phone }}">
                </div>
                <div class="form-group">
                    <div class="text-right">
                        <button class="btn btn-success" type="submit">Simpan Profile</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection