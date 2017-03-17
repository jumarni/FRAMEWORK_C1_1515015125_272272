<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosencontroller extends Controller
{
    public function awal(){
	return "Hello dari DosenController";
	}
	public function tambah(){
		return $this->simpan();
	}
	public function simpan(){
		$dosen = new dosen();
		$dosen->nama ='novi';
		$dosen->nip ='1515015';
		$dosen->alamat ='unmul';
		$dosen->pengguna_id =1;
		$dosen->save();
		return"Data dengan username {$dosen->nama} telah disimpan";
}
}
