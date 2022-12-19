<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\pendistribusian;
use App\Models\nama__produk;
use App\Models\jenis__produk;
use App\Models\harga__jual;
use App\Models\tempat__distribusi;

class feController extends Controller
{
    public function index()
    {
        return view('fe.dashboard');
    }


    public function produk()
    {
        $pendistribusian = pendistribusian::all();
        $nama_produk = nama__produk::all();

        return view('fe.produk', compact('pendistribusian', 'nama_produk'));
    }

    public function tempat_distribusi()
    {
        $tempat_distribusi = tempat__distribusi::all();

        return view('fe.data.tempat-distribusi',compact('tempat_distribusi'));
    }

    public function harga_jual()
    {
        $harga_jual = harga__jual::all();

        return view('fe.data.harga-jual',compact('harga_jual'));
    }

    public function jenis_produk()
    {
        $jenis_produk  = jenis__produk::all();
        // $nama_produk = nama__produk::find($id);

        return view('fe.data.jenis-produk', compact('jenis_produk'));
    }

    public function user_profile()
    {
        return view('fe.pages.user-profile');
    }

    public function faq()
    {
        return view('fe.pages.faq');
    }

    public function contact()
    {
        return view('fe.pages.contact');
    }
}