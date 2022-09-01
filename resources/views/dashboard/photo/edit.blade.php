@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Foto Wisata</h1>
    </div>

    <div class="col-lg-8">
        <form method="POST" action="/dashboard/photos/{{ $wst->id }}" class="mb-5"
            enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Wisata</label>
                <input type="hidden" class="form-control @error('id_wst') is-invalid @enderror" name="id_wst" id="id_wst" required readonly
                     value="{{ old('id_wst', $wst->id) }}">
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" required readonly
                     value="{{ old('name', $wst->name) }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                {{-- <label for="slug" class="form-label">Slug</label> --}}
                <input type="hidden" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug" required readonly
                    value="{{ old('slug', $wst->slug) }}">
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
                @if ($wst->image)
                <img src="{{ asset('storage/' . $wst->image) }}"
                class="img-preview img-fluid mb-3 col-sm-5 d-block">
                @elseif ($wst->link)
                    <img src="{{ $wst->link }}"
                        class="img-preview img-fluid mb-3 col-sm-5 d-block">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                 @endif
                </div>
                <div class="input-group mb-3">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image"
                    onchange="previewImage()">
                    <span class="input-group-text">atau</span>
                    <input type="text" class="form-control @error('link') is-invalid @enderror" placeholder="Masukan link gambar..." aria-label="Server" name="link" value="{{ old('link', $wst->link) }}">
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

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script>
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
