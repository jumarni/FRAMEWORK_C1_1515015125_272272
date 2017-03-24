<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class MahasiswaController extends Controller
{
     public function awal(){
    	return"Mahasiswa Mengambil Matakuliah Framework";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$mahasiswa = new mahasiswa();
    	$mahasiswa->nama = 'nonik sriningsih';
    	$mahasiswa->nim = '1515015000';
    	$mahasiswa->pengguna_id= '1';
    	$mahasiswa->save();
    	return "data dengan nama {$mahasiswa->nama} telah disimpan";
    }
}
