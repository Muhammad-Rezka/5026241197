<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class sirupController extends Controller
{
    public function index()
    {
        $sirup = DB::table('sirup')->get();

        return view('indexsirup', ['sirup' => $sirup]);
    }

    public function create()
    {
        return view('createsirup');
    }

    public function store(Request $request)
    {
        $request->validate([
            'merksirup'  => 'required|max:30',
            'stocksirup' => 'required|integer|min:0',
            'tersedia'   => 'required|in:Y,N',
        ]);

        DB::table('sirup')->insert([
            'merksirup'  => $request->merksirup,
            'stocksirup' => $request->stocksirup,
            'tersedia'   => $request->tersedia,
        ]);

        return redirect('/sirup')->with('success', 'Data sirup berhasil ditambahkan');
    }

    public function edit($kodesirup)
    {
        $sirup = DB::table('sirup')->where('kodesirup', $kodesirup)->first();

        return view('editsirup', ['sirup' => $sirup]);
    }

    public function update(Request $request, $kodesirup)
    {
        $request->validate([
            'merksirup'  => 'required|max:30',
            'stocksirup' => 'required|integer|min:0',
            'tersedia'   => 'required|in:Y,N',
        ]);

        DB::table('sirup')->where('kodesirup', $kodesirup)->update([
            'merksirup'  => $request->merksirup,
            'stocksirup' => $request->stocksirup,
            'tersedia'   => $request->tersedia,
        ]);

        return redirect('/sirup')->with('success', 'Data sirup berhasil diupdate');
    }

    public function destroy($kodesirup)
    {
        DB::table('sirup')->where('kodesirup', $kodesirup)->delete();

        return redirect('/sirup')->with('success', 'Data sirup berhasil dihapus');
    }
}
