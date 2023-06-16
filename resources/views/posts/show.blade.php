@extends('layouts.app')

@section('title', $data->title)

@section('content')

    <article class="blog-post mt-5">
        <h2 class="blog-post-title mb-4">{{ $data->title }}</h2>
        <img src="{{ url('storage/' . $data->image) }}" alt="">
        <p class="fs-5">{!! $data->content !!}</p>
        <p class="blog-post-meta">Created at : {{ date('d M Y', strtotime($data->created_at)) }}</p>
    </article>

    <div class="card mb-3">
        <div class="card-header">
            {{ $total_comments }} Komentar
        </div>
        <div class="card-body">
            <div class="container">
                @foreach ($comments->take(1) as $comment)
                    <div class="my-1">
                        <p class="text-muted mb-1">&#64;{{ $comment->commentwriter->username }}</p>
                        <blockquote class="blockquote mb-0">
                            <p>{{ $comment->comment }}</p>
                            <p class="blockquote-footer"><small>Commented At :
                                    {{ date('d M Y H:i', strtotime($comment->created_at)) }}</small></p>
                        </blockquote>
                    </div>
                @endforeach

                @if ($comments->count() > 1)

                    <div class="position-relative my-4">
                        <a class="position-absolute top-50 start-50 translate-middle" id="showAllComments">Show All
                            Comments</a>
                    </div>

                    <div id="hiddenComments" style="display: none;">
                        @foreach ($comments->skip(1) as $comment)
                            <div class="my-4">
                                <p class="text-muted mb-1">&#64;{{ $comment->commentwriter->username }}</p>
                                <blockquote class="blockquote mb-0">
                                    <p>{{ $comment->comment }}</p>
                                    <p class="blockquote-footer"><small>Commented At :
                                            {{ date('d M Y H:i', strtotime($comment->created_at)) }}</small></p>
                                </blockquote>
                            </div>
                    </div>
            </div>
            @endforeach
        </div>
    </div>

    <script>
        document.getElementById("showAllComments").addEventListener("click", function() {
            document.getElementById("hiddenComments").style.display = "block";
            this.style.display = "none";
        });
    </script>

    @endif



    <form action="{{ url('comments') }}" class="d-flex my-5" method="POST">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control" name="comment" placeholder="Buat Komentar">
            <input type="hidden" name="post_id" value="{{ $data->id }}">
            <button type="submit" class="btn btn-outline-secondary">Kirim</button>
        </div>
    </form>


    <a href="{{ route('index') }}" class="btn btn-success mb-3">Back</a>
@endsection
