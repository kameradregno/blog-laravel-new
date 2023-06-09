@extends('layouts.app')

@section('title', 'Login')

@section('content')
    
    <div class="card">
        <div class="card-header">Login</div>
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
            
            </form>

        </div>
    </div>
    
@endsection