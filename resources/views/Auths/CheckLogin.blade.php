@extends('layouts.master')
@section('content')
    @if (session()->has('errr'))
        <span>{{ session('errr') }}</span>
    @endif
    <h2>Form Login</h2>
    <form action="{{ route('postLogin') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pass</label>
            <input name="password" type="password" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
