<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Portofolio_controller extends Controller
{
    public function edit()
    {
    	$title = 'Manage Portofolio';
    	$pf = \DB::table('portofolio')->where('portofolio_id',1)->first();

    	return view('admin.portofolio.portofolio_edit',compact('title','pf'));
    }

    public function update(Request $request)
    {
    	$keterangan = $request->keterangan;

    	\DB::table('portofolio')->where('portofolio_id',1)->update([
    		'keterangan'=>$keterangan
    	]);

    	\Session::flash('pesan','Portoflio berhasil di Update');
    	return redirect('admin/portofolio/edit');
    }
}
