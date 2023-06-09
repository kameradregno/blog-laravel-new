@extends('layouts.app')

@section('title', 'Berita')

@section('content')

    @foreach ($post as $p)
    <div class="card my-4 rounded-0">
        <div class="body">
            <div class="card-body">
                <h5 class="card-title">{{ $p->title }}</h5>
                <p class="card-text">
                    <small class="muted">Created at
                        {{ date('d M Y H:i', strtotime($p->created_at)) }}
                    </small>
                </p>
                <a href="{{}}"></a>
            </div>
        </div>
    </div>
    @endforeach

@endsection
