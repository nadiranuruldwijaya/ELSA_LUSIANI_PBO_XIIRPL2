<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class TugasController extends Controller
{
    
    public function DaftarSiswa() {
   		$tampil = Siswa::all();
   		return view('daftar-siswa',compact('tampil')); 	
   }
  
}
