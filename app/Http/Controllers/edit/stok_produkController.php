<?php

namespace App\Http\Controllers\edit;

use App\Http\Controllers\Controller;
use App\Models\nama__produk;
use App\Models\stok_produk;
use Illuminate\Http\Request;

class stok_produkController extends Controller
{
    public function fe_add_stok_produk()
    {
        $data = stok_produk::all();
        $data_nama_produk = nama__produk::where('disable','=', null)->get();


        return view('fe.add.add-stok-produk',compact('data',
        'data_nama_produk',
    ));
    }
    
    public function fe_insert_stok_produk(Request $request){
        $request->validate([
            'id_nama_produk' => 'required',
            'jumlah_stok' => 'required',
        ]);
        $data = stok_produk::create($request->all());

        $data->save();
        return redirect()->route('stok_produk')->with('success', 'Data Berhasil Ditambahkan');
    }
    public function fe_edit_stok_produk($id)
    {
        $data = stok_produk::find($id);
        $data_nama_produk = nama__produk::where('disable','=', null)->get();


        return view('fe.edit.edit-stok-produk' ,compact('data',
        'data_nama_produk',
    ));
    }

    public function fe_update_stok_produk(Request $request, $id){
        $data = stok_produk::find($id);

        $data->update($request->all());

        $data->save();
        return redirect()->route('stok_produk')->with('success', 'Data Berhasil Diupdate');
    }

    public function fe_delete_stok_produk($id){
        $data = stok_produk::find($id);
        
        $data->delete();
        return redirect()->route('stok_produk')->with('error', 'Data Berhasil Dihapus');
    }
}
