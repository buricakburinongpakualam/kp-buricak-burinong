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
            <a href="#" class="logo m-0 float-start mt-1">Kampung Buricak Burinong</a>

            <ul
              class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end"
            >
              <li><a href="#">Beranda</a></li>
              <li><a href="#sejarah">Sejarah</a></li>
              <li><a href="#wisata">Wisata</a></li>
              <li><a href="#rumah-singgah">Rumah Singgah</a></li>
              <li><a href="#kontak">Kontak</a></li>
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

    <div class="hero">
      <div class="hero-slide">
        <div
          class="img overlay"
          style="background-image: url('https://images.unsplash.com/photo-1661908762080-822e13ba4ec2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80')"
        ></div>
        <div
          class="img overlay"
          style="background-image: url('https://images.unsplash.com/photo-1661908762008-a777ead9d81f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80')"
        ></div>
        <div
          class="img overlay"
          style="background-image: url('https://images.unsplash.com/photo-1661946484921-ff95b09b67d6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80')"
        ></div>
      </div>

      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center">
            <h1 class="heading" data-aos="fade-up">
              Kampung Buricak Burinong Desa Pakualam
            </h1>
            <a href="#sejarah"><button type="submit" class="btn btn-primary"><i class="bi bi-arrow-down"></i></button></a>
          </div>
        </div>
      </div>
    </div>

    <div class="section" id="sejarah">
        <div class="container">
          <div class="row mb-5 align-items-center">
            <div class="col-lg-6">
              <h2 class="font-weight-bold text-dark heading">
                Sejarah Kampung Buricak Burinong
              </h2>
            </div>
            <div class="col-lg-6">
              <p class="text-black-50 mt-5" align="justify">
                Nama kampung ini digagas oleh seorang birokrasi yang merupakan asli putra daerah sumedang daerah Situraja oleh bapak Herman Suyatman yang merupakan seorang staff kementrian pendayaan aparatur negara. Buricak Burinong ini mulai dibangun pada akhir 2017 dan diresmikan oleh Bupati Sumedang pada saat itu H Doni Ahmad Munir pada tanggal 15 Desember 2018. Pak Bupati menyatakan bahwa desa Pakualam merupakan salah satu desa yang dijadikan desa wisata serta prioritas wisata di Sumedang dari empat desa lainya di waduk Jatigede untuk dijadikan desa wisata. 
              </p>
            </div>
            <div class="col-lg-6">
              <p class="text-black-50" align="justify">
                Nama Buricak burinong merupakan sebuah nama kampung di wilayah dusun Cisema tepatnya desa Pakualam. Nama Buricak Burinong berasal dari bahasa sunda buhun (sunda lama) yang memiliki arti “kelap kelip” atau “gemerlapan”,nama ini terinspirasi dari keragaman warna yang dipakai pada setiap rumahnya, dimana setiap rumah menggunakan beberapa warna untuk mengecat tembok baik dibagian samping (kiri dan kanan) juga depan dan belakang serta atap rumah dimana warna yang dipakai adalah kuning,hijau,ungu dll.
              </p>
            </div>
            <div class="col-lg-6 mx-auto text-center">
              <p>
                <a
                  href="sejarah"
                  class="btn btn-primary text-white"
                  >Baca Selengkapnya <i class="bi bi-arrow-right"></i></a
                >
              </p>
            </div>
          </div>
        </div>
      </div>


    <div class="section section-4" id="wisata">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-11">
            <h2 class="font-weight-bold heading text-white mt-5">
              Wisata
            </h2>
            <p class="text-white-50">
              Terdapat objek wisata yang tersebar dari pintu masuk hingga ke tepian waduk pada Kampung Buricak Burinong yang bisa dinikmati oleh semua kalangan dan memberikan pesona indah dari keindahan waduk jatigede. Juga terdapat paket wisata yang dapat dipesan.
            </p>
              <a
                  href="https://api.whatsapp.com/send?phone=6282310207711&text=Hallo!%20Saya%20ingin%20memesan%20paket%20wisata"
                  target="_blank"
                  class="btn btn-primary text-white px-4 mt-3"
                  ><i class="bi bi-whatsapp mx-1"></i>Pesan Paket Wisata </a
                >
          </div>
        </div>
      </div>
    </div>

    <div class="section section-properties">
        <div class="container">
          <div class="row">
            @foreach ($posts as $wst)
                
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 mb-4">
              <div class="property-item">
                <div class="property-content text-center" >
                <a href="/detail/{{ $wst->slug }}" class="img">
                  @if ($wst->image)
                  <div>
                      <img src="{{ asset('storage/' . $wst->image) }}" alt="{{ $wst->name }}" class="img-fluid mt-3" style="max-height: 200px">
                  </div>
                  @elseif ($wst->link)
                      <div>
                          <img src="{{ $wst->link }}" alt="{{ $wst->name }}" class="img-fluid mt-3" style="max-height: 200px">
                      </div>
                  @else
                      <img src="https://source.unsplash.com/1200x400/?{{ $wst->name }}" alt="{{ $wst->name }}"
                          class="img-fluid mt-3" style="max-height: 200px">
                  @endif
                </a>
  
                    <span class="city d-block">{{ $wst->name }}</span>
                    <span class="d-block mb-2 text-black-50"
                      >{{ $wst->alamat }}</span
                      >
                      
                      <a
                      href="/detail/{{ $wst->slug }}"
                      class="btn btn-primary py-2 px-3 mb-5"
                      ><i class="bi bi-eye mx-1"></i>Lihat Detail</a
                    >
                  </div>
                </div>
              </div>
              @endforeach
              <!-- .item -->
            </div>
          </div>
        </div>
      </div>

    <div class="" id="rumah-singgah"> </div>


    <div class="section mt-5" >
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-9">
              <h2 class="font-weight-bold text-dark heading">
                Rumah Singgah
              </h2>
            </div>
            <div class="col-lg-3 ">
              <div class="counter-wrap mb-5 mb-lg-0">
                <div class="row">
                  <div class="col-1">
                    <table class="text-dark">
                      <tr>
                        <td><i class="bi bi-plus"></i></td>
                      </tr>
                      <tr>
                        <td><i class="bi bi-dash"></i></td>
                      </tr>
                    </table>
                  </div>
                  <div class="col">
  
                    
                    <span class="number"
                    >
                    <span class="countup text-dark">21</span>
                  </div>
                </div>
                    
                    </span
                  >
                  <span class="caption text-black-50">Rumah Siap Huni</span>
                </div>
              <p>
              
              </p>
            </div>
          </div>
          <div class="row section-counter">
            <div
              class="col-12 col-sm-12 col-md-6 col-lg-9"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <div class="counter-wrap mb-5 mb-lg-0" align="justify">
                <span class="caption text-black-50" >Terdapat Rumah singgah yang dapat menampung beberapa orang untuk menginap dengan harga yang cukup terjangkau, untuk informasi lebih lanjut dapat menghubungi kontak disamping.</span>
              </div>
            </div>

            <div
              class="col-10 col-sm-12 col-md-6 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="600"
            >
            <a
            href="https://api.whatsapp.com/send?phone=6282310207711&text=Hallo!%20Saya%20ingin%20memesan%20homestay"
            target="_blank"
            class="btn btn-primary text-white px-4"
            ><i class="bi bi-whatsapp mx-1"></i>Pesan Rumah Singgah </a
          >
            
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