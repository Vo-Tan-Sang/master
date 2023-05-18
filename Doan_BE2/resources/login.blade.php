@extends('layout')
@section('content')
@section('title','Login-Levents')
<div class="container">
    <div class="mt-5">
        {{-- @if($errors->any())
            <div class="col-12">
                @foreach ($errors ->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            </div>
        @endif

        @if (session()->has('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
        @endif
        @if (session()->has('success'))
        <div class="alert alert-success">{{session('success')}}</div>
        @endif --}}
    </div>
    <form action="{{ route('login.post')}}" method="POST" class="ms-auto me-auto mt-3" style="width: 500px; padding-top: 2cm">
        @csrf
        <div class="form-group mb-3">
            <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                   autofocus>
        </div>
        <div class="form-group mb-3">
            <input type="password" placeholder="Password" id="password" class="form-control" name="password" 
                   required>
        </div>
        <div class="form-group mb-3">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember"> Remember Me
                </label>
            </div>
        </div>
        <div class="form-group mb-3">
            <div class="checkbox">
                <label>
                    <a href="{{route("forget.password")}}" style="">Forget Password</a>
                </label>
            </div>
        </div>
        <div class="d-grid mx-auto">
            <button type="submit" class="btn btn-dark btn-block">Signin</button>
        </div>
    </form>
</div>
@endsection