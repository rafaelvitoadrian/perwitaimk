@extends('layouts.app')
@section('content')
    
<!-- ========================= hero-section start ========================= -->
<section id="home" class="hero-section"
    overflow: hidden;
    height: 700px;
    display: flex;
    align-items: center;
    background: linear-gradient(180deg, #C2FBFF 0%, rgba(255, 255, 255, 0) 93.47%);
    z-index: 1;"
    >
    <div class="container">
      <div class="row ">
        <div class="col-xl-6 col-lg-6 col-md-10">
          <div class="content">
              <h1 class="">Login</h1>
              <p class="mt-2">Ayo mulai berseluncur di web kami!</p>
              <form class="pb-5">
                <div class="form-group mt-4">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" style="
                  width: 80%;
                  background: #F1FEFF;
                  border: 1px solid #37C2CC;
                  box-sizing: border-box;
                  border-radius: 10px;
                  margin-bottom: 20px;
                  padding: 15px 10px;
                  ">
                </div>
                <div class="form-group mt-3">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style="
                  width: 80%;
                  background: #F1FEFF;
                  border: 1px solid #37C2CC;
                  box-sizing: border-box;
                  border-radius: 10px;
                  margin-bottom: 15px;
                  padding: 15px 10px;
                  ">
                </div>
                <div class="form-group form-check mb-2">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Remember me</label> 
                </div>
                <a style="display: -webkit-flex" href="#">Lupa Password?</a>
                <a href="" class="main-btn btn-hover mt-2">Login</a>
                <p class="mt-2">Belum punya akun? <a href="#">Klik Disini</a> </p>
              </form>
              
          </div>
        </div>
      </div>
    </div>
  </section>
      <!-- ========================= hero-section end ========================= -->

@endsection

