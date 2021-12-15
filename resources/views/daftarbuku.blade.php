@extends('layouts.app')
@section('content')
    
<!-- ========================= hero-section start ========================= -->
<section id="home" style="
    overflow: hidden;

    display: flex;
    align-items: center;
    background: linear-gradient(180deg, #C2FBFF 0%, rgba(255, 255, 255, 0) 93.47%);
    z-index: 1;"
    >
    <div class="container">
      <div class="row ">
        <div class="mt-200 ">
          <div class="content">
              <h1 style="text-align:center" class="">Katalog Perpustakaan</h1>
              <form action="#">
                <input type="search" class="search-box mt-4" style="
                width: 80%;
                background: #F1FEFF;
                border: 1px solid #37C2CC;
                box-sizing: border-box;
                border-radius: 10px;
                margin-bottom: 20px;
                padding: 15px 10px;
                ">
                
                <button class="main-btn btn-hover">
                  <i class="lni lni-search-alt"></i>
                </button>
                </form>

                <div class="row mt-10 mb-10">
                    <div class="col-2 mr-20">
                        <img src="assets/images/buku/bj-habibie.svg" alt="">
                    </div>
                    <div class="col-2 mr-20">
                        <img src="assets/images/buku/inggris.svg" alt="">
                    </div>
                    <div class="col-2 mr-20">
                        <img src="assets/images/buku/alasan.svg" alt="">
                    </div>
                    <div class="col-2 mr-20">
                        <img src="assets/images/buku/etika.svg" alt="">
                    </div>
                    <div class="col-2 mr-20">
                        <img src="assets/images/buku/cinta.svg" alt="">
                    </div>
                    <div class="col-2 mr-20">
                        <img src="assets/images/buku/inggris.svg" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 mr-20">
                        <img src="assets/images/buku/alasan.svg" alt="">
                    </div>
                    <div class="col-2 mr-20">
                        <img src="assets/images/buku/etika.svg" alt="">
                    </div>
                    <div class="col-2 mr-20">
                        <img src="assets/images/buku/cinta.svg" alt="">
                    </div>
                    <div class="col-2 mr-20">
                        <img src="assets/images/buku/inggris.svg" alt="">
                    </div>
                    <div class="col-2 mr-20">
                        <img src="assets/images/buku/alasan.svg" alt="">
                    </div>
                    <div class="col-2 mr-20">
                        <img src="assets/images/buku/bj-habibie.svg" alt="">
                    </div>
                </div>
                
            
          </div>
        </div>
      </div>
    </div>
  </section>
      <!-- ========================= hero-section end ========================= -->

@endsection

