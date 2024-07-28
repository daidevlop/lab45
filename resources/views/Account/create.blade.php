@extends('layouts.master')
@section('content')
    <h2>List Account</h2>
    <a href="{{ route('account.index') }}" class="btn btn-primary">Back</a>
    <form action="{{ route('account.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="=" class="form-label">Name</label>
            <input type="text" class="form-control" id="=" name="name">
            @error('name')
                <span style="color:red">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input type="email" class="form-control" id="" name="email">
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
            <input type="date" class="form-control" id="" name="dob">
            @error('dob')
                <span style="color:red">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">phone</label>
            <input type="number" class="form-control" id="" name="phone">
            @error('phone')
                <span style="color:red">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">address</label>
            <input type="text" class="form-control" id="" name="address">
            @error('address')
                <span style="color:red">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Image</label>
            <input type="file" class="form-control" id="" name="image">
            @error('image')
                <span style="color:red">{{$message}}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
