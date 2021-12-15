@extends('layouts.app')
@section('content')
    
<!-- ========================= hero-section start ========================= -->
<section id="home" class="hero-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-6 col-lg-6 col-md-10">
          <div class="hero-content">
                          <h1>PERWITA | Perpustakaan Wisata Masa Lalu</h1>
                          <p>Perpustakaan seribu kenangan yang kita buat dimasa lalu</p>
                          
                          <a href="{{ route('about')}}" class="main-btn btn-hover">Read More</a>
          </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6">
                      <div class="hero-image text-center text-lg-end">
                          <img src="assets/images/hero/hero-image.svg" alt="img">
                      </div>
                  </div>
      </div>
          </div>
  </section>
      <!-- ========================= hero-section end ========================= -->

@endsection

