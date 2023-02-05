<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class userController extends Controller
{
    public function fe_add_user()
    {
        $data = User::all();
        $data_role_user = role::all();

        return view('fe.add.add-user',compact('data',
        'data_role_user',
    ));
    }
    public function fe_insert_user(Request $request){
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|unique:User',
        //     'foto' => 'required',
        //     'password' => 'required',
        //     'role' => 'required',
        // ]);
        $data = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'foto' => $request->foto,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60) ,
        ]);

        if($request->hasfile('foto')){
            $nama_baru = Str::random(10) . '.' . $request->file('foto')->extension();
            $request->file('foto')->move('images/foto-user/', $nama_baru);
            $data->foto = $nama_baru;
            $data->save();
        }

        return redirect()->route('user')->with('success', 'Data Berhasil Ditambahkan');
    }
    public function fe_edit_user($id)
    {
        $data = User::find($id);
        $data_role_user = role::all();

        return view('fe.edit.edit-user' ,compact('data',
        'data_role_user',
    ));
    }
    public function fe_edit_password_user($id)
    {
        $data = User::find($id);

        return view('fe.edit.edit-password-user' ,compact('data'));
    }
    public function fe_update_password_user(Request $request,$id)
    {
        $data = User::find($id);

        $data->update([
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);

        return redirect()->route('user')->with('success', 'Password Berhasil Diupdate');
    }

    public function fe_update_user(Request $request, $id){
        $data = User::find($id);

        if($request->hasfile('foto')){
            if(File_exists(public_path('images/foto-user/'.$data->foto))){ //either you can use file path instead of $data->image
                unlink(public_path('images/foto-user/'.$data->foto));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
            }
        }
        $data->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            // 'foto' => $request->foto,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        if($request->hasfile('foto')){
            if(File_exists(public_path('images/foto-user/'.$data->foto))){ //either you can use file path instead of $data->image
                unlink(public_path('images/foto-user/'.$data->foto));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
             }
             $nama_baru = Str::random(10) . '.' . $request->file('foto')->extension();
             $request->file('foto')->move('images/foto-user/', $nama_baru);
             $data->foto = $nama_baru;
             $data->save();
        }
        return redirect()->route('user')->with('success', 'Data Berhasil Diupdate');
    }

    public function fe_delete_user($id){
        $data = User::find($id);

        // if (auth()->user()->role != 'moderator') {
        //     return redirect()->route('user')->with('error', ' Data Gagal Di Delete');
        // }
        if(File_exists(public_path('images/foto-user/'.$data->foto))){ //either you can use file path instead of $data->image
            unlink(public_path('images/foto-user/'.$data->foto));//here you can also use path like as ('uploads/media/welcome/'. $data->image)
        }
        
        
        $data->delete();
        return redirect()->route('user')->with('error', 'Data Berhasil Dihapus');
    }
}
