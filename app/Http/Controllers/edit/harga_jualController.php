<?php

namespace App\Http\Controllers\edit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\harga__jual;

class harga_jualController extends Controller
{
    public function fe_add_harga_jual()
    {
        $data = harga__jual::all();

        return view('fe.add.add-harga-jual',compact('data'));
    }
    public function fe_insert_harga_jual(Request $request){
        $request->validate([
            'harga_jual' => 'required',
            'rp' => 'required',
        ]);
        $data = harga__jual::create($request->all());

        $data->save();
        return redirect()->route('harga_jual')->with('success', 'Data Berhasil Ditambahkan');
    }
    public function fe_edit_harga_jual($id)
    {
        $data = harga__jual::find($id);

        return view('fe.edit.edit-harga-jual' ,compact('data'));
    }

    public function fe_update_harga_jual(Request $request, $id){
        $data = harga__jual::find($id);

        $data->update($request->all());

        $data->save();
        return redirect()->route('harga_jual')->with('success', 'Data Berhasil Diupdate');
    }

    public function fe_delete_harga_jual($id){
        $data = harga__jual::find($id);
        
        $data->delete();
        return redirect()->route('harga_jual')->with('error', 'Data Berhasil Dihapus');
    }
}
