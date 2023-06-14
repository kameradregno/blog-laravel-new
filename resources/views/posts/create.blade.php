@extends('layouts.app')

@section('title', 'Buat Blog')

@section('content')

    <h1 class="my-4">Buat Blog</h1>

    
    <form method="POST" action="{{ route('index') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="mb-3">
            <label class="form-label">Konten</label>
            <textarea type="text" class="form-control" name="content" id="content"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Gambar</label>
            <input type="file" class="form-control" id="content" name="image">
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Buat Blog</button>
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

