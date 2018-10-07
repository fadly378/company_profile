<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard_controller extends Controller
{
    public function mail(Request $request){
    	$nama = $request->nama;
		$email = $request->email;
		$nope = $request->nope;
		$keterangan = $request->keterangan;

		\DB::table('mail')->insert([
			'nama'=>$nama,
			'email'=>$email,
			'nope'=>$nope,
			'keterangan'=>$keterangan
		]);

		\Session::flash('pesan','Pesan berhasil dikirim');
		return redirect('/');
    }
}
