<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen_matakuliah;

class dosen_matakuliahcontroller extends Controller
{
    public function awal(){
	return "Hello dari Dosen_matakuliahController";
	}
	public function tambah(){
		return $this->simpan();
	}
	public function simpan(){
		$dosen_matakuliah= new dosen_matakuliah);
		$dosen_matakuliah>dosen_id ='marny';
		$dosen_matakuliah>matakuliah_id ='001';
		$dosen_matakuliah>save();
		return"Data dengan username {$dosen_matakuliah>nama} telah disimpan";
}
}
