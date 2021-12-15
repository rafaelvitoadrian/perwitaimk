@extends('layouts.dash')
@section('content')
    
<!-- ========================= hero-section start ========================= -->
<section id="home" class="hero-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-6 col-lg-6 col-md-10">
          <div class="hero-content">
                          <h1 style="color: #6744ff">Selamat Pengembalian Anda Sukses!</h1>
                          <a style="font-size: 20px">Silahkan cek email anda, kami akan mengirimkan bukti</a>
                          <a style="font-size: 20px">pengembalian. Silahkan konfirmasi ulang pada Pustakawan</a>
                          <p style="font-size: 20px"> <a href="">Klik Disini</a> jika tidak muncul email konfirmasi</p>           
                          <a href="{{ route('detail-kembali')}}" class="main-btn btn-hover">
                            Kembalikan Lagi
                          </a>
                          
          </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6">
                      <div class="hero-image text-center text-lg-end">
                          <img src="assets/images/hero/hero-image.svg" alt="">
                      </div>
                  </div>
      </div>
          </div>
  </section>
      <!-- ========================= hero-section end ========================= -->

@endsection

