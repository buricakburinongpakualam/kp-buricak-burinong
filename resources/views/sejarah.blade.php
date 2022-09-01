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
            <h1 class="heading" data-aos="fade-up">Sejarah Kampung Buricak Burinong</h1>

            <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item text-light">Beranda</li>
                <li
                  class="breadcrumb-item active text-white-50"
                  aria-current="page"
                >
                  Sejarah Kampung Buricak Burinong
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
            <h2 class="font-weight-bold heading text-primary mb-4">Sejarah</h2>
            <p class="text-black-50" align="justify">
              Nama Buricak burinong merupakan sebuah nama kampung di wilayah dusun Cisema tepatnya desa Pakualam. Nama Buricak Burinong berasal dari bahasa sunda buhun (sunda lama) yang memiliki arti “kelap kelip” atau “gemerlapan”,nama ini terinspirasi dari keragaman warna yang dipakai pada setiap rumahnya, dimana setiap rumah menggunakan beberapa warna untuk mengecat tembok baik dibagian samping (kiri dan kanan) juga depan dan belakang serta atap rumah dimana warna yang dipakai adalah kuning,hijau,ungu dll. Nama kampung ini digagas oleh seorang birokrasi yang merupakan asli putra daerah sumedang daerah Situraja oleh bapak Herman Suyatman yang merupakan seorang staff kementrian pendayaan aparatur negara. Buricak Burinong ini mulai dibangun pada akhir 2017 dan diresmikan oleh Bupati Sumedang pada saat itu H Doni Ahmad Munir pada tanggal 15 Desember 2018. Pak Bupati menyatakan bahwa desa Pakualam merupakan salah satu desa yang dijadikan desa wisata serta prioritas wisata di Sumedang dari empat desa lainya di waduk Jatigede untuk dijadikan desa wisata. Objek  wisata yang tersebar dari pintu masuk hingga ke tepian pantai pada Buricak Burinong pada saat itu adalah:
            </p>
            <ul>
              <li>Spot Selfie</li>
              <li>Spot Payung Selfie</li>
              <li>Mural</li>
              <li>Hammock</li>
              <li>Wisata Religi (3 Makam Keramat)</li>
              <li>Pantai Cisema</li>
              <li>Rakit</li>
              <li>Tempat Makan</li>
              <li>Kuda Renggong</li>
            </ul>
            <p class="text-black-50" align="justify">
              Di kampung Buricak Burinong terdapat juga atraksi wisata dengan kultur budaya yang masih lekat pada masyarakatnya Sumedang lainya.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>

@endsection
