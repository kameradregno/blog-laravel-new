@extends('layouts.app')

@section('title', $data->title)

@section('content')

<article class="blog-post mt-5">
    <h2 class="blog-post-title mb-1">{{$post->title}}</h2>
    <p>{{ $post->content }}</p>
    <p class="blog-post-meta">Created at : {{ date('d M Y', strtotime($post->created_at)) }}</p>

    <p>{{$data->content}}</p>
</article>

{{-- <p class="text-muted">{{ $total_comments }} Komentar</p>


@foreach ($comments->take(1) as $comment)
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
    @endforeach --}}

    {{-- @if ($comments->count() > 1)

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
        </div>  --}}

<a href="{{ route('posts') }}">Back</a>



@endsection