<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\pendistribusian;
use App\Models\nama__produk;
use App\Models\jenis__produk;
use App\Models\harga__jual;
use App\Models\kreditdebit;
use App\Models\tempat__distribusi;

use Spatie\Activitylog\Models\Activity;


class feController extends Controller
{
    public function index()
    {
        $act = Activity::latest()->get();

        $pemasukan_pengeluaran = kreditdebit::latest()->get();
        $pemasukan = kreditdebit::whereMonth('tanggal', '=', date('m'))->sum('pemasukan') ;
        $pengeluaran = kreditdebit::whereMonth('tanggal', '=', date('m'))->sum('pengeluaran') ;
        
        $jumlah_barang = pendistribusian::latest()->get();
        $sales = pendistribusian::whereMonth('tanggal', '=', date('m'))->sum('jumlah_barang') ;

        return view('fe.dashboard',compact('act','pemasukan','pengeluaran','sales','pemasukan_pengeluaran','jumlah_barang'));
    }


    public function produk()
    {
        $pendistribusian = pendistribusian::latest()->get();
        $nama_produk = nama__produk::all();
        $pemasukan_pengeluaran = kreditdebit::latest()->get();
        $pemasukan = kreditdebit::all()->sum('pemasukan') ;
        $pengeluaran = kreditdebit::all()->sum('pengeluaran') ;


        return view('fe.produk', compact('pendistribusian', 'nama_produk','pemasukan_pengeluaran','pemasukan','pengeluaran'));
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
        $jenis_produk  = jenis__produk::with('nama_produk')->get();
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
