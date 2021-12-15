<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Page Setelah Login

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function admin()
    {
        return view('admin');
    }

    public function detailpinjam()
    {
        return view('detailpinjam');
    }

    public function updateakun()
    {
        return view('updateakun');
    }

    public function daftaranggota()
    {
        return view('daftar-anggota');
    }

    public function detailkembali()
    {
        return view('detailkembali');
    }
    public function pinjampage()
    {
        return view('pinjampage');
    }
    public function pinjamsukses()
    {
        return view('pinjamsukses');
    }
    public function pengembalian()
    {
        return view('pengembalianpage');
    }
    public function pengembaliansukses()
    {
        return view('pengembalian-sukses');
    }
    public function aboutlogin()
    {
        return view('aboutlogin');
    }
    public function laporandataanggota()
    {
        return view('laporandataanggota');
    }
    public function laporandendaanggota()
    {
        return view('laporandendaanggota');
    }
    public function laporandonasibuku()
    {
        return view('laporandonasibuku');
    }
    public function laporanpeminjaman()
    {
        return view('laporanpeminjaman');
    }
    public function laporanpengembalian()
    {
        return view('laporanpengembalian');
    }
    public function kartuanggota()
    {
        return view('kartukeanggotaan');
    }
    

}
