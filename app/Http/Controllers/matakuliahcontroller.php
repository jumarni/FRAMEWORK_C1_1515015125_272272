<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class matakuliahcontroller extends Controller
{
    public function awal(){
	return "Hello dari MatakuliahController";
	}
	public function tambah(){
		return $this->simpan();
	}
	public function simpan(){
		$matakuliah = new matakuliah();
		$matakuliah->title ='411A';
		$matakuliah->save();
		return"Data dengan username {$matakuliah->username} telah disimpan";
}
