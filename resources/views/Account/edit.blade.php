@extends('layouts.master')
@section('content')
    <h2>List Account</h2>
    <a href="{{ route('account.index') }}" class="btn btn-primary">Back</a>
    <form action="{{ route('account.update',$edit->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="=" class="form-label">Name</label>
            <input type="text" class="form-control" id="=" name="name" value="{{$edit->name}}">
            @error('name')
                <span style="color:red">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input type="email" class="form-control" id="" name="email" value="{{$edit->email}}">
            @error('email')
                <span style="color:red">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <select class="form-select" name="type">
                <option value="1-Truong phong">1-Truong phong</option>
                <option value="2-Nhan vien">2-Nhan vien</option>
            </select>
            @error('type')
                <span style="color:red">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Dob</label>
            <input type="date" class="form-control" id="" name="dob" value="{{$edit->dob}}">
            @error('dob')
                <span style="color:red">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">phone</label>
            <input type="text" class="form-control" id="" name="phone" value="{{$edit->phone}}">
            @error('phone')
                <span style="color:red">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">address</label>
            <input type="text" class="form-control" id="" name="address" value="{{$edit->address}}">
            @error('address')
                <span style="color:red">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Image</label>
            <input type="file" class="form-control" id="" name="image">
            <img src="{{Storage::url($edit->image)}}" width="50" alt="">
            @error('image')
                <span style="color:red">{{$message}}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
