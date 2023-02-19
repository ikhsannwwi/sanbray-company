<?php

namespace App\Http\Controllers\edit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\nama__produk;
use App\Models\jenis__produk;

class nama_produkController extends Controller
{
    public function fe_add_nama_produk()
    {
        $add_nama_produk = nama__produk::all() ;
        $data_jenis_produk = jenis__produk::all();


        return view('fe.add.add-nama-produk', compact('add_nama_produk','data_jenis_produk'));
    }
    

    public function fe_insert_nama_produk(Request $request){
        $request->validate([
            'nama_produk' => 'required',
            'id_jenis_produk' => 'required',
        ]);
        $data = nama__produk::create($request->all());

        $data->save();

        return redirect()->route('produk')->with('success', 'Data berhasil ditambahkan');
    }

    public function fe_edit_nama_produk($id)
    {
        // $data = nama__produk::with('jenis__produk');
        $data = nama__produk::find($id);
        $data_jenis_produk = jenis__produk::all();

        return view('fe.edit.edit-nama-produk' ,compact('data','data_jenis_produk'));
    }

    public function fe_update_nama_produk(Request $request, $id){
        $data = nama__produk::find($id);

        $data->update($request->all());

        $data->save();
        return redirect()->route('produk')->with('success', 'Data berhasil diupdate');
    }

    public function fe_delete_nama_produk($id){
        $data = nama__produk::find($id);
        
        $data->delete();
        return redirect()->route('produk')->with('error', 'Data berhasil dihapus');
    }
}
