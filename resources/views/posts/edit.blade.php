@extends('layouts.app')

@section('title', 'Edit Blog')

@section('content')

    <h1 class="my-4">Edit Blog</h1>

    <form method="POST" action="{{ url("posts/$post->slug") }}" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Konten</label>
            <textarea class="form-control" name="content" id="content" value="{{ $post->content }}" required>{{ $post->content }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Gambar</label>
            <input type="file" class="form-control" id="content" name="image">
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>

    </form>

    <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
    </script>

@endsection
