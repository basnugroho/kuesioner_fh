@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><b>Users</b></div>
        <div class="panel-body">
        <table class="table table-hover">
        <thead>
            <th>
                Image
            </th>
            <th>
                Name
            </th>
            <th>
                Edit Profile
            </th>
            <th>
                Delete
            </th>
        </thead>  
        <tbody>
        @if($users->count() > 0)
            @foreach($users as $user)
            <tr>
                <td><img src="{{ asset($user->profile->avatar) }}"  alt="{{ $user->name }}" width="60px"></td>
                <td>{{ $user->profile->nama_lengkap }}</td>
                <td>
                    <a href="{{ route('user.profile', ['id'=>$user->id])}}" class="btn btn-xs btn-info">Edit</a>
                </td>
                <td>
                    @if(Auth::id() != $user->id)
                        <a href="{{ route('user.delete', ['id'=>$user->id])}}" class="btn btn-xs btn-danger">Delete</a>
                    @endif
                </td>
            </tr>
            @endforeach
        @else
            <tr>
                <th colspan="5" class=""text-center>No Users</th>
            </tr>
        @endif
        </tbody> 
    </table>
        </div>
    </div>
@stop