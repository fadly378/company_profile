<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class Services_controller extends Controller
{
    public function index()
    {
    	$title = 'Manage Services';
    	$services = \DB::table('services')->get();

    	return view('admin.services.services_index',compact('title','services'));
    }

    public function edit($services_id){
    	$title = 'Edit Services';
    	$service = \DB::table('services')->where('services_id',$services_id)->first();

    	return view('admin.services.services_edit',compact('title','service'));
    }

    public function update(Request $request, $services_id){
    	$judul = $request->judul;
    	$keterangan = $request->keterangan;

    	\DB::table('services')->where('services_id',$services_id)->update([
    		'judul'=>$judul,
    		'keterangan'=>$keterangan
    	]);

    	Session::flash('pesan','Data berhasil di update');
    	return redirect('admin/services');
    }
}
