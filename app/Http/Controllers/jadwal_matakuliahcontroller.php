<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal_matakuliah;

class jadwal_matakuliahcontroller extends Controller
{
    public function awal(){
	return "Hello dari jadwal_matakuliahController";
	}
	public function tambah(){
		return $this->simpan();
	}
	public function simpan(){
		$jadwal_matakuliah = new jadwal_matakuliah();
		$jadwal_matakuliah->nama ='marny';
		$jadwal_matakuliah->nim ='1515015125';
		$jadwal_matakuliah->alamat ='ponpes alfajar air hitam';
		$jadwal_matakuliah->pengguna_id =1;
		$jadwal_matakuliah->save();
		return"Data dengan username {$jadwal_matakuliah->nama} telah disimpan";
	}
}
