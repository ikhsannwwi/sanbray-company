<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\pendistribusian;
use App\Models\nama__produk;
use App\Models\jenis__produk;
use App\Models\harga__jual;
use App\Models\kreditdebit;
use App\Models\tempat__distribusi;
use App\Models\User;
use Spatie\Activitylog\Models\Activity;


class feController extends Controller
{
    public function index()
    {
        $act = Activity::latest()->get();

        $pemasukan_pengeluaran = kreditdebit::latest()->get();
        $pemasukan = kreditdebit::whereMonth('tanggal', '=', date('m'))->sum('pemasukan') ;
        $pengeluaran = kreditdebit::whereMonth('tanggal', '=', date('m'))->sum('pengeluaran') ;

        $pemasukan_all = kreditdebit::all()->sum('pemasukan') ;
        $pengeluaran_all = kreditdebit::all()->sum('pengeluaran') ;

        
        $jumlah_barang = pendistribusian::latest()->get();
        $sales = pendistribusian::whereMonth('tanggal', '=', date('m'))->sum('jumlah_barang') ;
        $salesperday = pendistribusian::whereMonth('tanggal', '=', date('d'))->sum('jumlah_barang') ;

        return view('fe.dashboard',compact('act','pemasukan','pengeluaran','pemasukan_all','pengeluaran_all','sales','pemasukan_pengeluaran','jumlah_barang','salesperday'));
    }


    public function produk()
    {
        $pendistribusian = pendistribusian::orderBy('tanggal', 'DESC')->get();
        $nama_produk = nama__produk::all();
        

        $jenis_produk  = jenis__produk::with('nama_produk')->get();



        return view('fe.produk', compact('pendistribusian', 'nama_produk','jenis_produk'));
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

    public function pemasukan_pengeluaran()
    {
        $pemasukan_pengeluaran = kreditdebit::orderBy('tanggal', 'DESC')->get();
        $pemasukan = kreditdebit::all()->sum('pemasukan') ;
        $pengeluaran = kreditdebit::all()->sum('pengeluaran') ;

        // $nama_produk = nama__produk::find($id);

        return view('fe.data.pemasukan-pengeluaran', compact(
            'pemasukan_pengeluaran',
            'pemasukan',
            'pengeluaran',
         ));
    }

    public function user_profile()
    {
        return view('fe.pages.user-profile');
    }
    public function users()
    {
        $data = User::all();

        return view('fe.data.user',compact('data'));
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
