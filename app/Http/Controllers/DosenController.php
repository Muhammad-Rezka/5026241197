<?php

//di java: package kuliah.pert3
namespace App\Http\Controllers;

//di java: import
use Illuminate\Http\Request;

class DosenController extends Controller
{
    //

    public function index(){
        return "<h1>Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com</h1>";
    }

    public function biodata(){
        $nama = "Muhammad Rezka Apasha";
        $matkul = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];

        return view('biodata', ['nama' => $nama, 'matkul' => $matkul]);
    }
}
