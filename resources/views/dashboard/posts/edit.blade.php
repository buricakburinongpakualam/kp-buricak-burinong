@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Wisata</h1>
    </div>

    <div class="col-lg-8">
        <form method="POST" action="/dashboard/posts/{{ $post->slug }}" class="mb-5"
            enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Wisata</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" required
                    autofocus value="{{ old('name', $post->name) }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug" required readonly
                    value="{{ old('slug', $post->slug) }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Gambar Wisata</label>
                {{-- <img class="img-preview img-fluid mb-3 col-sm-5"> --}}
            </div>
            <div class="mb-3">
                @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}"
                class="img-preview img-fluid mb-3 col-sm-5 d-block">
                @elseif ($post->link)
                    <img src="{{ $post->link }}"
                        class="img-preview img-fluid mb-3 col-sm-5 d-block">
                 @endif
                </div>
                <div class="input-group mb-3">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image"
                    onchange="previewImage()">
                    <span class="input-group-text">atau</span>
                    <input type="text" class="form-control @error('link') is-invalid @enderror" placeholder="Masukan link gambar..." aria-label="Server" name="link" value="{{ old('link', $post->link) }}">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    @error('link')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="2">{{ old('name', $post->name) }}</textarea>
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
              </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Deskripsi</label>
                <input id="desc" type="hidden" name="desc" value="{{ old('desc', $post->desc) }}">
                <trix-editor input="desc"></trix-editor>
                @error('desc')
                    <p class="form-text text-danger"> {{ $message }} </p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script>
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        name.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?name=' + name.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
