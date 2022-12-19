<?php

namespace App\Http\Controllers\edit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pendistribusian;
use App\Models\harga__jual;
use App\Models\tempat__distribusi;
use App\Models\nama__produk;

class pendistribusianController extends Controller
{
    public function fe_add_pendistribusian()
    {
        $data = pendistribusian::all();
        $data_nama_produk = nama__produk::all();
        $data_tempat_distribusi = tempat__distribusi::all();
        $data_harga_jual = harga__jual::all();

        return view('fe.add.add-pendistribusian',compact('data','data_nama_produk','data_tempat_distribusi','data_harga_jual'));
    }
    public function fe_insert_pendistribusian(Request $request){
        $data = pendistribusian::create($request->all());

        $data->save();
        return redirect()->route('produk')->with('success', 'Data Berhasil Ditambahkan');
    }
    public function fe_edit_pendistribusian($id)
    {
        $data = pendistribusian::find($id);
        $data_nama_produk = nama__produk::all();
        $data_tempat_distribusi = tempat__distribusi::all();
        $data_harga_jual = harga__jual::all();

        return view('fe.edit.edit-pendistribusian' ,compact('data','data_nama_produk','data_tempat_distribusi','data_harga_jual'));
    }

    public function fe_update_pendistribusian(Request $request, $id){
        $data = pendistribusian::find($id);

        $data->update($request->all());

        $data->save();
        return redirect()->route('produk')->with('success', 'Data Berhasil Diupdate');
    }

    public function fe_delete_pendistribusian($id){
        $data = pendistribusian::find($id);
        
        $data->delete();
        return redirect()->route('produk')->with('error', 'Data Berhasil Dihapus');
    }
}