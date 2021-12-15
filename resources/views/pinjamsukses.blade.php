@extends('layouts.dash')
@section('content')
    
<!-- ========================= hero-section start ========================= -->
<section id="home" class="hero-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-6 col-lg-6 col-md-10">
          <div class="hero-content">
                          <h1>Selamat Peminjaman Anda Sukses</h1>
                          <p>Silahkan cek email anda, kami akan mengirimkan bukti peminjaman. Silahkan konfirmasi ulang pada Pustakawan.</p>
                          
                          <p>Klik disini jika tidak muncul email konfirmasi.</p>

                          <a href="{{ route('detailpinjam')}}" class="main-btn btn-hover">Pinjam Lagi</a>
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

