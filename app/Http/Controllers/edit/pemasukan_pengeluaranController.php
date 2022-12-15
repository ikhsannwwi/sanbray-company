<?php

namespace App\Http\Controllers\edit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pemasukan_pengeluaranController extends Controller
{
    public function fe_add_pemasukan_pengeluaran()
    {
        return view('fe.add.add-pemasukan-pengeluaran');
    }
    public function fe_edit_pemasukan_pengeluaran()
    {
        return view('fe.edit.edit-pemasukan-pengeluaran');
    }
}
