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
          <div class="content">
            <br>
              <h1 class="mt-50">Daftar Keangotaan</h1>
              <form>
                <div class="mt-4 row justify-content-between text-left">
                  <div class="form-group col-sm-6 flex-column d-flex">
                      <label class="" for="First" class="form-label form-group col-sm-6 flex-column d-flex">First Name</label>
                      <input onblur="validate(1)" type="username" class="form-control" id="Username" aria-describedby="username" style="
                      width:100%;
                      background: #F1FEFF;
                      border: 1px solid #37C2CC;
                      box-sizing: border-box;
                      border-radius: 10px;
                      margin-bottom: 20px;
                      padding: 15px 10px;
                      ">
                  </div>
                  <div class="form-group col-sm-6 flex-column d-flex">
                    <label class="" for="Second" class="form-label form-group col-sm-6 flex-column d-flex">Jenis Kelamin</label>
                    <input onblur="validate(1)" class="form-control" id="Username" aria-describedby="username" style="
                    width:100%;
                    background: #F1FEFF;
                    border: 1px solid #37C2CC;
                    box-sizing: border-box;
                    border-radius: 10px;
                    margin-bottom: 20px;
                    padding: 15px 10px;
                    ">
                  </div>
                </div>
                <div class="mt-4 row justify-content-between text-left">
                  <div class="form-group col-sm-6 flex-column d-flex">
                      <label class="" for="Second" class="form-label form-group col-sm-6 flex-column d-flex">NIS</label>
                      <input type="number" onblur="validate(1)" class="form-control" id="Username" aria-describedby="username" style="
                      width:100%;
                      background: #F1FEFF;
                      border: 1px solid #37C2CC;
                      box-sizing: border-box;
                      border-radius: 10px;
                      margin-bottom: 20px;
                      padding: 15px 10px;
                      ">
                  </div>
                  <div class="form-group col-sm-6 flex-column d-flex">
                      <label class="" for="Second" class="form-label form-group col-sm-6 flex-column d-flex">Email Address</label>
                      <input type="email" onblur="validate(1)" class="form-control" id="Username" aria-describedby="username" style="
                      width:100%;
                      background: #F1FEFF;
                      border: 1px solid #37C2CC;
                      box-sizing: border-box;
                      border-radius: 10px;
                      margin-bottom: 20px;
                      padding: 15px 10px;
                      ">
                  </div>
                </div>
                <div class="mt-4 row justify-content-between text-left">
                  <div class="form-group col-sm-6 flex-column d-flex">
                      <label class="" for="Second" class="form-label form-group col-sm-6 flex-column d-flex">Jurusan</label>
                      <input type="username" class="form-control" id="Username" aria-describedby="username" style="
                      width:100%;
                      background: #F1FEFF;
                      border: 1px solid #37C2CC;
                      box-sizing: border-box;
                      border-radius: 10px;
                      margin-bottom: 20px;
                      padding: 15px 10px;
                      ">
                  </div>
                  <div class="form-group col-sm-6 flex-column d-flex">
                    <label class="" for="Second" class="form-label form-group col-sm-6 flex-column d-flex">Alamat</label>
                    <input type="email" onblur="validate(1)" class="form-control" id="Username" aria-describedby="username" style="
                    width:100%;
                    background: #F1FEFF;
                    border: 1px solid #37C2CC;
                    box-sizing: border-box;
                    border-radius: 10px;
                    margin-bottom: 20px;
                    padding: 15px 10px;
                    ">
                  </div>
                </div>
                <div class="mt-4 row justify-content-between text-left">
                  <div class="form-group col-sm-6 flex-column d-flex">
                      <label class="" for="Second" class="form-label form-group col-sm-6 flex-column d-flex">Tempat, Tanggal Lahir</label>
                      <input type="username" class="form-control" id="Username" aria-describedby="username" style="
                      width:100%;
                      background: #F1FEFF;
                      border: 1px solid #37C2CC;
                      box-sizing: border-box;
                      border-radius: 10px;
                      margin-bottom: 20px;
                      padding: 15px 10px;
                      ">
                  </div>
                  <div class="form-group col-sm-6 flex-column d-flex">
                    <label class="" for="Second" class="form-label form-group col-sm-6 flex-column d-flex">Instansi</label>
                    <input type="email" onblur="validate(1)" class="form-control" id="Username" aria-describedby="username" style="
                    width:100%;
                    background: #F1FEFF;
                    border: 1px solid #37C2CC;
                    box-sizing: border-box;
                    border-radius: 10px;
                    margin-bottom: 15px;
                    padding: 15px 10px;
                    ">
                   </div>
                </div>
                <button  class="main-btn btn-hover mt-1">Kembali</button>
                <button style="float: right" class="main-btn btn-hover mt-1">Daftar</button>
              </form>
          </div>
      </div>
    </div>
  </section>
      <!-- ========================= hero-section end ========================= -->

@endsection

