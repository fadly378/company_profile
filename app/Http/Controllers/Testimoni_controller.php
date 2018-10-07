<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

class Testimoni_controller extends Controller
{
    public function index(){
    	$title = 'Manage Testimoni';
    	$testimoni = \DB::table('testimoni')->get();

    	return view('admin.testimoni.testimoni_index',compact('title','testimoni'));
    }

    public function store(Request $request){
    	$nama = $request->nama;
    	$perusahaan = $request->perusahaan;
    	$keterangan = $request->keterangan;

    	\DB::table('testimoni')->insert([
    		'nama'=>$nama,
    		'perusahaan'=>$perusahaan,
    		'keterangan'=>$keterangan
    	]);

    	Session::flash('pesan','Testimoni berhasil ditambah');
    	return redirect('admin/testimoni');
    }

    public function edit($testimoni_id){
    	$title = 'Edit Testimoni';
    	$tt = \DB::table('testimoni')->where('testimoni_id',$testimoni_id)->first();

    	return view('admin.testimoni.testimoni_edit',compact('title','tt'));
    }

    public function update(Request $request, $testimoni_id){
    	$nama = $request->nama;
    	$perusahaan = $request->perusahaan;
    	$keterangan = $request->keterangan;

    	\DB::table('testimoni')->where('testimoni_id',$testimoni_id)->update([
    		'nama'=>$nama,
    		'perusahaan'=>$perusahaan,
    		'keterangan'=>$keterangan
    	]);

    	Session::flash('pesan','Testimoni berhasil diupdate');
    	return redirect('admin/testimoni');
    }

    public function delete($testimoni_id){
    	\DB::table('testimoni')->where('testimoni_id',$testimoni_id)->delete();

    	Session::flash('pesan','Testimoni berhasil dihapus');
    	return redirect('admin/testimoni');
    }
}
