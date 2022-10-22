<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function dosen(Request $request)
    {
        $data['daftar'] = ['layung', 'ihsan', 'adit'];
        $data['nama'] = $request->nama;
        return view('content/dosen', ['daftar' => $data['daftar'],
                                        'nama' => $data['nama']]);
        // return view('content/dosen', ['nama' => $request->nama]);
    }
}
