<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\pengguna;

class penggunaController extends Controller
{
    public function awal(){
	return "Hello dari PenggunaController";
	}
	public function tambah(){
		return $this->simpan();
	}
	public function simpan(){
		$pengguna = new pengguna();
		$pengguna->user 'jon_doe';
		$pengguna->password 'doe_jon';
		$pengguna->save();
		return"Data dengan username {$pengguna->username} telah disimpan";
	}
}
