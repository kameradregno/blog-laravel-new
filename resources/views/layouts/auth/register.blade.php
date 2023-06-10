@extends('layouts.app')

@section('title', 'Daftar')

@section('content')
    
    <div class="card">
        <div class="card-header">Daftar</div>
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Nama</label>
                <input type="text" class="form-control" name="username" id="username" value="{{ old('username') }}">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>
            
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi</label>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
            </div>

            <button type="submit" class="btn btn-primary">Daftar</button>
            
            </form>

        </div>
    </div>
    
@endsection