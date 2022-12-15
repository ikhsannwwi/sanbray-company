<?php

namespace App\Http\Controllers\edit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\tempat__distribusi;

class tempat_distribusiController extends Controller
{
    public function fe_add_tempat_distribusi()
    {
        $data = tempat__distribusi::all();

        return view('fe.add.add-tempat-distribusi',compact('data'));
    }
    public function fe_insert_tempat_distribusi(Request $request){
        $data = tempat__distribusi::create($request->all());

        $data->save();
        return redirect()->route('tempat_distribusi')->with('success', 'Data Berhasil Ditambahkan');
    }
    public function fe_edit_tempat_distribusi($id)
    {
        $data = tempat__distribusi::find($id);

        return view('fe.edit.edit-tempat-distribusi' ,compact('data'));
    }

    public function fe_update_tempat_distribusi(Request $request, $id){
        $data = tempat__distribusi::find($id);

        $data->update($request->all());

        $data->save();
        return redirect()->route('tempat_distribusi')->with('success', 'Data Berhasil Diupdate');
    }

    public function fe_delete_tempat_distribusi($id){
        $data = tempat__distribusi::find($id);
        
        $data->delete();
        return redirect()->route('tempat_distribusi')->with('error', 'Data Berhasil Dihapus');
    }
}