<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('pengguna/marny', function() {
   		$pengguna = new App\Pengguna();
		$pengguna->username ='jon';
		$pengguna->password ='doe';
		$pengguna->save();
		return"Data dengan username {$pengguna->username} telah disimpan";
	});

route:: get('ruangan','ruangancontroller@awal');
route:: get('ruangan/tambah','ruangancontroller@tambah');
route:: get('mahasiswa','mahasiswacontroller@awal');
route:: get('mahasiswa/tambah','mahasiswacontroller@tambah');
route:: get('jadwal_matakuliah','jadwal_matakuliahcontroller@awal');
route:: get('jadwal_matakuliah/tambah','jadwal_matakuliahcontroller@tambah');
route:: get('dosen','dosencontroller@awal');
route:: get('dosen/tambah','dosencontroller@tambah');
// });
//Route::get('pengguna','PenggunaController@awal');

//Route::get('/',function (){
	//return view('welcome');
//});

//Route::auth();

//Route::get('/home', 'HomeController@index');

