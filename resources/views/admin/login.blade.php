@extends('admin.app')
@section('title', 'Admin Login')
@section('content')
<div class="page-title text-center" style="margin-right: 250px;">Login to your CMS Account</div>
<form action="/admin/confirmation" method="POST" class="d-flex justify-content-center">
    @csrf
    <div class="form-control w-50 p-5" style="margin-right: 250px;">
        <div class="row">
            <div class="col-12">
                <label for="username" class="form-label fw-bold fs-5">Enter your Username or Email</label>
                <input name="username" class="form-control py-3" placeholder="Username..." />
                @error('username')
                <div style="color: red;"> {{$message}}</div>
                @enderror
            </div>
            <div class="col-12 mt-3">
                <label for="password" class="form-label fw-bold fs-5">Enter your Password</label>
                <input name="password" class="form-control py-3" placeholder="Password..." />
                @error('password')
                <div style="color: red;"> {{$message}}</div>
                @enderror
            </div>
            <div class="col-12 mt-3">
                <button class="btn btn-primary w-100 fs-4 py-2" type="submit">Login</button>
            </div>
        </div>
    </div>
</form>
@endsection