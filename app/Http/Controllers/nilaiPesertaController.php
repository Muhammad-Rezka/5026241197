<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class nilaiPesertaController extends Controller
{
    //
    public function index()
    {
        $nilai_peserta = DB::table('nilai_peserta')->get();

        return view('indexnilaiPeserta', ['nilai_peserta' => $nilai_peserta]);
    }

    public function tambah()
    {
        return view('tambahnilaiPeserta');
    }
}
