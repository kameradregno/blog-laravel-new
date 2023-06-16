@extends('layouts.app')

@section('title', 'Berita')

@section('content')

    <div>
        <a href="{{ route('create') }}" class="btn btn-success">Create</a>
    </div>

    <div class="row">
        @foreach ($post as $p)
            <div class="card my-4 rounded-2 shadow-sm">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ url('storage/' . $p->image) }}" class="img-fluid rounded-start" alt="photo">
                    </div>
                    <div class="col-md-8 px-3 py-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $p->title }}</h5>
                            <i class="card-text">{!! substr($p->content, 0, 50) !!}</i>
                            <p class="card-text">
                                <small class="muted">Created at
                                    {{ date('d M Y H:i', strtotime($p->created_at)) }}
                                </small>
                            </p>
                            <p>
                                <small>
                                    Created By {{ Auth::user()->username }}
                                </small>
                            </p>
                            <a href="{{ route('show', $p->slug) }}" class="btn btn-success">Selengkapnya</a>
                            <a href="{{ route('edit', $p->slug) }}" class="btn btn-warning">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
