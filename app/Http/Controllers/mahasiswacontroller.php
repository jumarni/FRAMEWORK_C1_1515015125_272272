<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class mahasiswacontroller extends Controller
{
    public function awal(){
	return "Hello dari MahasiswaController";
	}
	public function tambah(){
		return $this->simpan();
	}
	public function simpan(){
		$mahasiswa = new mahasiswa();
		$mahasiswa->nama ='marny';
		$mahasiswa->nim ='1515015125';
		$mahasiswa->alamat ='ponpes alfajar air hitam';
		$mahasiswa->pengguna_id =1;
		$mahasiswa->save();
		return"Data dengan username {$mahasiswa->nama} telah disimpan";
}
}
