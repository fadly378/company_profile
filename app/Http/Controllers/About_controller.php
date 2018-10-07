<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

class About_controller extends Controller
{
    public function index()
    {
    	$title = 'Manage About';
    	$about = \DB::table('about')->where('about_id',1)->first();

    	return view('admin.about.about_index',compact('title','about'));
    }

    public function store(Request $request)
    {
    	$keterangan = $request->keterangan;

    	\DB::table('about')->where('about_id',1)->update([
    		'keterangan'=>$keterangan
    	]);

    	Session::flash('pesan','About berhasil di update');
    	return redirect('admin/about');
    }
}
