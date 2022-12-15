<?php

namespace App\Http\Controllers\edit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pendistribusianController extends Controller
{
    public function fe_add_pendistribusian()
    {
        return view('fe.add.add-pendistribusian');
    }
    public function fe_edit_pendistribusian()
    {
        return view('fe.edit.edit-pendistribusian');
    }
}
