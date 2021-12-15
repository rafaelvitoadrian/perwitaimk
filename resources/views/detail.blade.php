@extends('layouts.app')
@section('content')
    
<!-- ========================= hero-section start ========================= -->
<section id="home" class="hero-section" style="
        overflow: hidden;
        height: 700px;
        display: flex;
        align-items: center;
        background: linear-gradient(180deg, #C2FBFF 0%, rgba(255, 255, 255, 0) 93.47%);
        z-index: 1;"
    >
    <div class="container">
      <div class="row ">
        <div class="">
          <div class="content mt-200">
              <div class="d-flex bd-highlight">
                <div class="flex-fill bd-highlight" style="padding-left: 1rem;">
                    <a href="" class="main-btn btn-hover" >Kembali</a>
                </div>
                <div class="p-1 flex-fill bd-highlight">
                    <h1 >Detail Buku</h1>
                </div>
              </div>
              <div class="d-flex bd-highlight">
                <div class="p-3 flex-fill bd-highlight">
                    <img src="assets/images/buku/bj-habibie.svg" alt="" style="width: 350px;">
                </div>
                <div class="p-3 bd-highlight">
                    <h2 class="mt-3">Nama Buku      : Aerodinamika </h2>
                    <h2 class="mt-3">Penulis        : BJ Habibie</h2>
                    <h2 class="mt-3">Penerbit       : Gramedia</h2>
                    <h2 class="mt-3">Tahun Terbit   : 2021</h2>
                    <h2 class="mt-3">ISBN           : 1009JA829N</h2>
                    <a href="" class="main-btn btn-hover mt-4">Pinjam</a>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
      <!-- ========================= hero-section end ========================= -->

@endsection

