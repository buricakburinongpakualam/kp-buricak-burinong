@extends('dashboard.layouts.main')

@section('container')
@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="row">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3  border-bottom">
            <div class="col-7">
                <h1 class="h2 mt-3">Data Wisata</h1>
            </div>
            <div class="col mt-5">
                <a href="/dashboard/posts/create" class="btn btn-success "><i class="bi bi-plus"></i></a>
            </div>
        </div>
    </div>


    <div class="table-responsive col-lg-8">
        <table class="table table-striped table-sm">
            <thead>
                <tr >
                    <th scope="col">#</th>
                    <th scope="col">Nama Wisata</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $key => $post)
                    <tr>
                        <td>{{ $posts->firstItem() + $key }}</td>
                        <td>{{ $post->name }}</td>
                        {{-- <td>{{ $post->category->name }}</td> --}}
                        <td>
                            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info py-2 px-2"><i class="bi bi-eye"></i></span></a>
                            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning py-2 px-2"><i class="bi bi-pencil"></i></a>
                            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0 py-2 px-2" onclick="return confirm('Are you sure ?')"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            {{ $posts->links() }}
        </div>
    </div>

@endsection
