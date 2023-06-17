@extends('layouts.app')

@section('title', 'Berita')

@section('content')

    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($post as $p)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ asset('storage/' . $p->image) }}" class="d-block w-100 h-auto rounded-2 opacity-50"
                        alt="Slide Image">
                    <div class="carousel-caption d-none d-md-block text-dark">
                        <h3>{{ $p->title }}</h3>
                        <a href="{{ url("posts/$p->slug") }}" class="text-dark">
                            <p class="text-dark">Selengkapnya....</p>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    @foreach ($post as $p)
        <div class="card my-4">
            <div class="card-body">
                <h5 class="card-title">{{ $p->title }}</h5>
                <i class="card-text">{!! substr($p->content, 0, 50) !!}</i>
                <p class="card-text">
                    <small class="muted">Created at
                        {{ date('d M Y, H:i', strtotime($p->created_at)) }}
                    </small>
                </p>
                <p>
                    <small>
                        Created By {{ $p->user->username }}
                    </small>
                </p>

                <a href="{{ url("posts/$p->slug") }}" class="btn btn-success">Selengkapnya</a>

            </div>
        </div>
    @endforeach

@endsection
