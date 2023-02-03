<?php

namespace App\Http\Controllers\edit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\jenis__produk;

class jenis_produkController extends Controller
{
    public function fe_sub_jenis_produk($slug)
    {
        // $sub_jenis_produk = $jenis__produk;
        $jenis_produk = jenis__produk::with('nama_produk',$slug)->get();
        // $nama_produk = $jenis_produk;
        dd($jenis_produk);
         return view('fe.data.jenis_produk.sub-jenis-produk', compact('jenis_produk'));
    }

    public function fe_add_jenis_produk()
    {
        $add_jenis_produk = jenis__produk::all() ;

        return view('fe.add.add-jenis-produk', compact('add_jenis_produk'));
    }

    public function fe_insert_jenis_produk(Request $request){
        $request->validate([
            'jenis_produk' => 'required'
        ]);
        $data = jenis__produk::create($request->all());

        $data->save();

        return redirect()->route('produk')->with('success', 'Data berhasil ditambahkan');
    }

    public function fe_edit_jenis_produk($id)
    {
        $data = jenis__produk::find($id);

        return view('fe.edit.edit-jenis-produk' ,compact('data'));
    }

    public function fe_update_jenis_produk(Request $request, $id){
        $request->validate([
            'jenis_produk' => 'required'
        ]);
        $data = jenis__produk::find($id);

        $data->update($request->all());

        $data->save();
        return redirect()->route('produk')->with('success', 'Data berhasil diupdate');
    }

    public function fe_delete_jenis_produk($id){
        $data = jenis__produk::find($id);
        
        $data->delete();
        return redirect()->route('produk')->with('error', 'Data berhasil dihapus');
    }
}
