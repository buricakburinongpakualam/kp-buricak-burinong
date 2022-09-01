@extends('dashboard.layouts.main')

@section('container')
        <div class="container row my-3">
            <div class="col-lg-8">
                <h2 class=" mt-3">{{ $post->name }}</h2>
                <div class="form-text">
                    {{ $post->alamat }}
                </div>
            </div>
        </div>

    <div class="row container">
        <div class="col-9">
            @if ($post->image)
                <div>
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->name }}" class="img-fluid">
                </div>
            @elseif ($post->link)
                <div>
                    <img src="{{ $post->link }}" alt="{{ $post->name }}" class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400/?{{ $post->name }}" alt="{{ $post->name }}"
                    class="img-fluid">
            @endif
            <article class="my-3" align="justify">
                {!! $post->desc !!}
            </article>
        </div>
        <div class="col-3">
            <a href="/dashboard/posts" class="btn btn-success mt-1"> <i class="bi bi-arrow-left"></i>
                Kembali</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-primary mt-1"><i class="bi bi-plus"></i>
                    Tambah Foto</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning mt-1 px-4"><i class="bi bi-pencil"></i>
                Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger border-0 mt-1 px-3" onclick="return confirm('Are you sure ?')"><i class="bi bi-trash"></i> Hapus</button>
            </form>
        </div>
    </div>


@endsection
