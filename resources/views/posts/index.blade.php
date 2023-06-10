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
                    <p>
                        <small>
                            {{ Auth::user()->username }}
                        </small>
                    </p>
                    <a href="{{ route('show', $p->slug) }}" class="btn btn-success">Selengkapnya</a>
                    <a href="{{ route('edit', $p->slug) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('delete', $p->slug) }}" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    @endforeach

@endsection
