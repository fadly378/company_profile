<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Alamat_controller extends Controller
{
    public function edit(){
    	$title = 'Manage Alamat';
    	$al = \DB::table('alamat')->where('alamat_id',1)->first();

    	return view('admin.alamat.alamat_edit',compact('title','al'));
    }

    public function update(Request $request){
    	$alamat = $request->alamat;

    	\DB::table('alamat')->where('alamat_id',1)->update([
    		'alamat'=>$alamat
    	]);

    	\Session::flash('pesan','Alamat berhasil di Update');
    	return redirect('admin/alamat');
    }
}
