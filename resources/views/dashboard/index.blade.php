@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-5 mt-3">
        <h1 class="h2 text-center">Selamat datang {{ auth()->user()->name }}</h1>
    </div>
@endsection
