<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController extends Controller
{
     public function awal(){
    	return"Dosen Pengampu Matakuliah Framework";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$dosen = new dosen();
    	$dosen->nama = 'Jumarni';
    	$dosen->nip = '1515015125';
    	$dosen->pengguna_id= '1';
    	$dosen->save();
 
    	return "data dengan nama {$dosen->nama} telah disimpan";
     }
}