@extends('layouts.app')

@section('content')
    @include('admin.includes.errors')
    <div class="panel panel-default">
        <div class="panel-heading">
            <b>Setting</b>
        </div>
        <div class="panel-body">
            <form action="{{ route('setting.update', ['id' => $setting->id]) }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="site_name">Nama Website</label>
                    <input type="text" name="site_name" value="{{ $setting->site_name }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="tagline">Tagline</label>
                    <input type="text" name="tagline" value="{{ $setting->tagline }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="about">Tentang</label>
                    <textarea class="form-control" name="about" id="" cols="30" rows="10">{{$setting->about}}</textarea>
                </div>
                <div class="form-group">
                    <label for="email">Contact Email</label>
                    <input type="text" name="email" value="{{ $setting->email }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="text" name="facebook" value="{{ $setting->facebook }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="instagram">Instagram</label>
                    <input type="text" name="instagram" value="{{ $setting->instagram }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="twitter">Twitter</label>
                    <input type="text" name="twitter" value="{{ $setting->twitter }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <input type="text" name="address" value="{{ $setting->address }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" value="{{ $setting->phone }}" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Save Setting</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection