@extends('layouts.dash')
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
              <div class="pt-3 d-flex bd-highlight">
                <div class=" pt-3 flex-fill bd-highlight">
                  <img src="assets/images/buku/bj-habibie.svg" alt="" style="width: 350px;">
                </div>
                <div class=" flex-fill bd-highlight">
                  
                    <h1 >Peminjaman Buku</h1>
                    <div class="form-group mt-4">
                      <label for="exampleInputEmail1">Nomor ID</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  style="
                      width: 80%;
                      background: #F1FEFF;
                      border: 1px solid #37C2CC;
                      box-sizing: border-box;
                      border-radius: 10px;
                      margin-bottom: 20px;
                      padding: 15px 10px;
                      ">
                    </div>
                    <div class="form-group mt-4">
                      <label for="exampleInputEmail1">Lama Peminjaman</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  style="
                      width: 80%;
                      background: #F1FEFF;
                      border: 1px solid #37C2CC;
                      box-sizing: border-box;
                      border-radius: 10px;
                      margin-bottom: 20px;
                      padding: 15px 10px;
                      ">
                    </div>
                    <div class="form-group mt-4">
                      <label for="exampleInputEmail1">Nama Pustakawan</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  style="
                      width: 80%;
                      background: #F1FEFF;
                      border: 1px solid #37C2CC;
                      box-sizing: border-box;
                      border-radius: 10px;
                      margin-bottom: 20px;
                      padding: 15px 10px;
                      ">
                    </div>
                    <a style="float: right; margin-right: 20%" href="{{ route('pinjamsukses')}}" class="main-btn btn-hover">Konfirmasi</a>
                    <a style="float: right; margin-right: 40%" href="{{ route('pinjampage')}}" class="main-btn btn-hover">Kembali</a>
                </div>
              </div>


          </div>
        </div>
      </div>
    </div>
  </section>
      <!-- ========================= hero-section end ========================= -->

@endsection

