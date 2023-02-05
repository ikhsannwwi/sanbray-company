<?php

namespace App\Http\Controllers\edit;

use App\Http\Controllers\Controller;
use App\Models\role;
use Illuminate\Http\Request;

class role_userController extends Controller
{
    public function fe_add_role_user()
    {
        $data = role::all();

        return view('fe.add.add-role-user',compact('data'));
    }
    public function fe_insert_role_user(Request $request){
        $request->validate([
            'nama_role' => 'required',
        ]);
        $data = role::create($request->all());

        $data->save();
        return redirect()->route('role_user')->with('success', 'Data Berhasil Ditambahkan');
    }
    public function fe_edit_role_user($id)
    {
        $data = role::find($id);

        return view('fe.edit.edit-role-user' ,compact('data'));
    }

    public function fe_update_role_user(Request $request, $id){
        $data = role::find($id);

        $data->update($request->all());

        $data->save();
        return redirect()->route('role_user')->with('success', 'Data Berhasil Diupdate');
    }

    public function fe_delete_role_user($id){
        $data = role::find($id);
        
        $data->delete();
        return redirect()->route('role_user')->with('error', 'Data Berhasil Dihapus');
    }
}
