<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class ruangancontroller extends Controller
{
    public function awal(){
	return "Hello dari RuanganController";
	}
	public function tambah(){
		return $this->simpan();
	}
	public function simpan(){
		$ruangan = new ruangan();
		$ruangan->title ='411A';
		$ruangan->save();
		return"Data dengan username {$ruangan->title} telah disimpan";
	}
}
