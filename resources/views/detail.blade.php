@extends('layouts.main')

@section('container')
<div class="site-mobile-menu site-navbar-target">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close">
      <span class="icofont-close js-menu-toggle"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div>

<nav class="site-nav">
  <div class="container">
    <div class="menu-bg-wrap">
      <div class="site-navigation">
        <a href="/" class="logo m-0 float-start">Kampung Buricak Burinong</a>


        <ul
          class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end"
        >
          <li class="active"><a href="/">Kembali</a></li>
        </ul>
        <a
          href="#"
          class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
          data-toggle="collapse"
          data-target="#main-navbar"
        >
          <span></span>
        </a>
      </div>
    </div>
  </div>
</nav>

    <div
      class="hero page-inner overlay"
      style="background-image: url('https://images.unsplash.com/photo-1661908762080-822e13ba4ec2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80')"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" >
                {{ $post->name }}
            </h1>

            <nav
              aria-label="breadcrumb"
             
            >
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item text-light">Wisata</li>
                <li class="breadcrumb-item text-light">Detail</li>
                <li
                  class="breadcrumb-item active text-white-50"
                  aria-current="page"
                >
                  {{ $post->name }}
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-7">
            <div class="img-property-slide-wrap">
              <div class="img-property-slide">
                @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->name }}" class="img-fluid">
                @elseif ($post->link)
                <img src="{{ $post->link }}" alt="{{ $post->name }}" class="img-fluid">
                @endif
              </div>
            </div>
          </div>
          <div class="col-lg-4"align="justify">
            <h2 class="heading text-primary">{{ $post->name }}</h2>
            <p class="meta">{{ $post->alamat }}</p>
            <p class="text-black-50">
              {!! $post->desc !!}
            </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @if ($cek)
    <div class="row mb-5 align-items-center">
      <div class="col-lg-6 text-center mx-auto">
        <h2 class="font-weight-bold text-primary heading">
          Foto - Foto Wisata {{ $post->name }}
        </h2>
      </div>
    </div> 
    @else
    <div class="row align-items-center">
      <div class="col-lg-6 text-center mx-auto">
        <h2 class="font-weight-bold text-primary heading">
          Foto - Foto Wisata {{ $post->name }}
        </h2>
      </div>
    </div> 
    <p class="text-center mb-5">Tidak ada foto lainnya.</p>              
    @endif
    
    <div class="section section-properties">
      <div class="container d-flex justify-content-center"> 
        <div class="row">
          
          @foreach ($photo as $wst)
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="property-item">
              <div class="property-content" >
                @if ($wst->image)
                    <img src="{{ asset('storage/' . $wst->image) }}" alt="{{ $wst->name }}" class="img-fluid mt-3">
                @elseif ($wst->link)
                        <img src="{{ $wst->link }}" alt="{{ $wst->name }}" class="img-fluid mt-3">
                @else
                    <p>Tidak ada foto lainnya.</p>
                @endif
              </a>

                </div>
              </div>
            </div>
            @endforeach
            <!-- .item -->
          </div>
        </div>
      </div>
    </div>    

@endsection
