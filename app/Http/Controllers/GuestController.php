<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    // PAGE SEBELUM LOGIN

    public function index()
    {
        return view('welcome');
    }
    public function daftarakun()
    {
        return view('daftarakun');
    }
    public function forgotpass()
    {
        return view('forgotpass');
    }
    public function loginakun()
    {
        return view('loginakun');
    }
    public function searchingpage()
    {
        return view('searchingpage');
    }
    public function searchbook()
    {
        return view('searchbook');
    }
    public function daftarbuku()
    {
        return view('daftarbuku');
    }
    public function detail()
    {
        return view('detail');
    }
    public function about()
    {
        return view('about');
    }
}
