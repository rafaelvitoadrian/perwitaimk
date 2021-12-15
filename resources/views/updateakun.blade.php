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
        <div class="col-xl-6 col-lg-6 col-md-10">
          <div class="content">
              <h1 class="">Sign Up</h1>
              <p class="mt-2">Sudah siap berseluncur?</p>
              <form>
                <div class="mt-4">
                  <label for="Username" class="form-label">Username</label>
                  <input type="username" class="form-control" id="Username" aria-describedby="username" style="
                  width: 80%;
                  background: #F1FEFF;
                  border: 1px solid #37C2CC;
                  box-sizing: border-box;
                  border-radius: 10px;
                  margin-bottom: 20px;
                  padding: 15px 10px;
                  ">
                  <div id="username"</div>
                </div>
                <div>
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="
                  width: 80%;
                  background: #F1FEFF;
                  border: 1px solid #37C2CC;
                  box-sizing: border-box;
                  border-radius: 10px;
                  margin-bottom: 20px;
                  padding: 15px 10px;
                  ">
                  <div id="emailHelp"</div>
                </div>
                <div>
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" style="
                  width: 80%;
                  background: #F1FEFF;
                  border: 1px solid #37C2CC;
                  box-sizing: border-box;
                  border-radius: 10px;
                  margin-bottom: 20px;
                  padding: 15px 10px;
                  ">
                </div>
                <div>
                  <label for="exampleInputPassword1" class="form-label">Ganti Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" style="
                  width: 80%;
                  background: #F1FEFF;
                  border: 1px solid #37C2CC;
                  box-sizing: border-box;
                  border-radius: 10px;
                  margin-bottom: 20px;
                  padding: 15px 10px;
                  ">
                </div>
                <a href="{{ route('admin')}}" class="main-btn btn-hover mt-2">
                  <i class="lni lni-backward"></i>
                </a>
                <a href="{{ route('admin')}}" class="main-btn btn-hover mt-2">Terapkan</a>
              </form>
          </div>
        </div>
      </div>
    </div>
  </section>
      <!-- ========================= hero-section end ========================= -->

@endsection

