@extends('layouts.master')
@section('content')
    <h2>List Account</h2>
    <a href="{{route('account.create')}}" class="btn btn-primary">Add</a>
    <table class="table">
        <thead>
            <th>#</th>
            <th>name</th>
            <th>email</th>
            <th>type</th>
            <th>dob</th>
            <th>phone</th>
            <th>address</th>
            <th>image</th>
            <th>actoin</th>
        </thead>
        <tbody>
            @foreach ($acc as $ac)
                <tr>
                    <td>{{$ac->id}}</td>
                    <td>{{$ac->name}}</td>
                    <td>{{$ac->email}}</td>
                    <td>{{$ac->type}}</td>
                    <td>{{$ac->dob}}</td>
                    <td>{{$ac->phone}}</td>
                    <td>{{$ac->address}}</td>
                    <td><img src="{{Storage::url($ac->image)}}" width="50" alt=""></td>
                    <td>
                        <a href="{{route('account.edit',$ac->id)}}" class="btn btn-info">Edit</a>
                        <form action="{{route('account.destroy', $ac->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection