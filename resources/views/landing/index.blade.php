@extends('layouts.app')

@section('title', 'Berita')

@section('content')

    <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
        <div class="col-lg-6 px-0">
            <h1 class="display-4 fst-italic">Selamat Datang di News-ku</h1>
            <p class="lead my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, laboriosam dolorum. Sequi
                fuga fugit sit pariatur nobis similique, unde consequatur recusandae eveniet itaque asperiores. Facere nobis
                vitae eveniet iusto praesentium?</p>
            <p class="lead mb-0"><a href="#" class="text-body-emphasis fw-bold">Continue reading...</a></p>
        </div>
    </div>

    @foreach ($post as $p)
        <div class="card my-4 rounded-2 shadow-sm">
            <div class="body">
                <div class="card-body">
                    <h5 class="card-title">{{ $p->title }}</h5>
                    <p class="card-text">{!! substr($p->content, 0, 50) !!}</p>
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
                    <a href="{{ route('landingShow', $p->slug) }}" class="btn btn-success">Selengkapnya</a>
                </div>
            </div>
        </div>
    @endforeach

@endsection
