@extends('layouts.app')
@section('content')


<!-- ========================= hero-section start ========================= -->
<section id="home" class="hero-section">
    <div class="container ">
      <div class="row align-items-center">
        <div>
          <div style="float:right; padding-left:10%; width:90%;" class="hero-content">    
            <div class="tbl-container bdr">
                <table class="table ">
                <tr class="bg-primary text-center">
                    <th colspan=3 scope="col">
                        <h1>Kartu Keangotaan</h1>
                    </th>
                </tr>
                <tr class="bg-site pl-10">
                    <td>
                        <h3>Nomor ID </h3>
                    </td>
                    <td>
                        <h3>4611420039</h3>
                    </td>
                </tr>
                <tr class="bg-site pl-10">
                    <td>
                        <h3>Nama </h3>
                    </td>
                    <td>
                        <h3>Rafael Vito Adrian</h3>
                    </td>
                </tr>
                
                <tr class="bg-site pl-10">
                    <td>
                        <h3>Alamat  </h3>
                    </td>
                    <td>
                        <h3>Sampangan</h3>
                    </td>
                </tr>
                
                <tr class="bg-site pl-10">
                    <td>
                        <h3>Tanggal Lahir </h3>
                    </td>
                    <td>
                        <h3>28 Maret 2002s</h3>
                    </td>
                </tr>
                </table>
                </div>

                <a href="{{ route('admin')}}" class="main-btn btn-hover">Kembali</a>
                <a href="" class="main-btn btn-hover">Cetak</a>
          

            </div>
            </div>
            </div>
  </section>
      <!-- ========================= hero-section end ========================= -->

@endsection

<!-- <div class="card-rounded" >
                <div class="card-header bg-primary">
                    <h2>Kartu Anggota</h2>
                </div>
                <h3 class="card-text">Ler</h3>
            </div> -->