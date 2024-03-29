<?php

namespace App\Http\Controllers\edit;

use App\Http\Controllers\Controller;
use App\Models\kreditdebit;
use App\Models\nama__produk;
use Illuminate\Http\Request;

class pemasukan_pengeluaranController extends Controller
{
    public function fe_add_pemasukan_pengeluaran()
    {
        $add_pemasukan_pengeluaran = kreditdebit::all() ;
        $data_nama_produk = nama__produk::where('disable','=', null)->orWhere('disable','=', 99)->get();


        return view('fe.add.add-pemasukan-pengeluaran', compact('add_pemasukan_pengeluaran','data_nama_produk'));
    }

    public function fe_insert_pemasukan_pengeluaran(Request $request){
        $request->validate([
            'id_barang' => 'required',
            'tanggal' => 'required',
            'pemasukan' => 'required',
            'pengeluaran' => 'required',
            'deskripsi' => 'required',
        ]);
        $data = kreditdebit::create($request->all());

        $data->save();

        return redirect()->route('pemasukan_pengeluaran')->with('success', 'Data berhasil ditambahkan');
    }

    public function fe_edit_pemasukan_pengeluaran($id)
    {
        // $data = kreditdebit::with('nama__produk');
        $data = kreditdebit::find($id);
        $data_nama_produk = nama__produk::where('disable','=', null)->orWhere('disable','=', 99)->get();

        return view('fe.edit.edit-pemasukan-pengeluaran' ,compact('data','data_nama_produk'));
    }

    public function fe_update_pemasukan_pengeluaran(Request $request, $id){
        $data = kreditdebit::find($id);

        $data->update($request->all());

        $data->save();
        return redirect()->route('pemasukan_pengeluaran')->with('success', 'Data berhasil diupdate');
    }

    public function fe_delete_pemasukan_pengeluaran($id){
        $data = kreditdebit::find($id);
        
        $data->delete();
        return redirect()->route('pemasukan_pengeluaran')->with('error', 'Data berhasil dihapus');
    }
}
