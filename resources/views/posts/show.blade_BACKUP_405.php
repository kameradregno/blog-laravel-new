@extends('layouts.app')

@section('title', $data->title)

@section('content')

    <article class="blog-post mt-5">
        <h2 class="blog-post-title mb-4">{{ $data->title }}</h2>
<<<<<<< HEAD
        <img src="{{ url('storage/'.$data->image)}}" alt="photo" class="card-img-top object-fit-cover" width="100%" height="350">
        <p class="fs-5">{!! $data->content !!}</p> 
=======
        <img src="{{ url('storage/' . $data->image) }}" alt="">
        <p class="fs-5">{!! $data->content !!}</p>
>>>>>>> ef8e3b959dcae93621f284a9f09983c059f03606
        <p class="blog-post-meta">Created at : {{ date('d M Y', strtotime($data->created_at)) }}</p>
    </article>

    @foreach ($comments as $comment)
        <div class="card mb-3">
            <div class="card-header text-primary">
                &#64;{{ $comment->commentwriter->username }}
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>{{ $comment->comment }}</p>
                    <p class="blockquote-footer"><small>Commented At :
                            {{ date('d M Y H:i', strtotime($comment->created_at)) }}</small></p>
                </blockquote>
            </div>
        </div>
    @endforeach

    @if ($comments->count() > 1)

        <div class="position-relative">
            <a class="position-absolute top-50 start-50 translate-middle" id="showAllComments">Show All Comments</a>
        </div>

        <div id="hiddenComments" style="display: none;">
            @foreach ($comments->skip(1) as $comment)
                <div class="card mb-3">
                    <div class="card-header text-primary">
                        &#64;{{ $comment->commentwriter->name }}
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>{{ $comment->comment }}</p>
                            <p class="blockquote-footer"><small>Commented At :
                                    {{ date('d M Y H:i', strtotime($comment->created_at)) }}</small></p>
                        </blockquote>
                    </div>
                </div>
            @endforeach
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
