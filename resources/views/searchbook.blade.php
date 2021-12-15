@extends('layouts.app')
@section('content')
    
<!-- ========================= hero-section start ========================= -->
<section id="home" class="hero-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-6 col-lg-6 col-md-10">
          <div class="hero-content">

                          <h1>Ingin mencari buku?</h1>
                          <form action="#">
                            <input type="search" class="search-box" style="
                            width: 80%;
                            background: #F1FEFF;
                            border: 1px solid #37C2CC;
                            box-sizing: border-box;
                            border-radius: 10px;
                            margin-bottom: 20px;
                            padding: 15px 10px;
                            ">
                            
                            <a href="{{ route('daftarbuku')}}" class="main-btn btn-hover">
                              <i class="lni lni-search-alt"></i>
                            </a>
                        </form>
                          <p>Bingung mencari buku? 
                          <a href="{{ route('daftarbuku')}}">Klik Disini</a>
                          </p>
                                                                                  
                          
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

