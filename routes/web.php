<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$about = \DB::table('about')->where('about_id',1)->first();
	$services = \DB::table('services')->get();
	$portofolio = \DB::table('portofolio')->where('portofolio_id',1)->first();
	$testimoni = \DB::table('testimoni')->get();
	$alamat = \DB::table('alamat')->where('alamat_id',1)->first();
	$artikel = \DB::table('artikel')->limit(3)->get();

    return view('welcome',compact('title','about','services','portofolio','testimoni','alamat','artikel'));
});

Route::post('contact-us','Dashboard_controller@mail');
Route::get('keluar','Beranda_controller@keluar');

Route::group(['middleware'=>'auth'],function(){
	Route::get('/admin/beranda','Beranda_controller@index');

	// About ===========================================
	Route::get('/admin/about','About_controller@index');
	Route::post('/admin/about','About_controller@store');

	// Service =========================================
	Route::get('/admin/services','Services_controller@index');
	Route::post('/admin/services/{id}','Services_controller@update');
	Route::get('admin/services/{id}','Services_controller@edit');

	// Manage Portofolio
	Route::get('/admin/portofolio','Portofolio_controller@index');
	Route::get('/admin/portofolio/edit','Portofolio_controller@edit');
	Route::post('/admin/portofolio/update','Portofolio_controller@update');

	// Manage Testimoni

	Route::get('/admin/testimoni','Testimoni_controller@index');
	Route::post('/admin/testimoni','Testimoni_controller@store');
	Route::get('/admin/testimoni/{id}','Testimoni_controller@delete');
	Route::post('/admin/testimoni/{id}','Testimoni_controller@update');

	// Manage Alamat
	Route::get('/admin/alamat','Alamat_controller@edit');
	Route::post('/admin/alamat','Alamat_controller@update');

	// List Mail
	Route::get('/admin/mail','Mail_controller@index');

	Route::get('/admin/artikel','Artikel_controller@index');
	Route::post('/admin/artikel','Artikel_controller@store');
	Route::get('/admin/artikel/{id}','Artikel_controller@edit');
	Route::post('/admin/artikel/{id}','Artikel_controller@update');
	Route::get('/admin/artikel/delete/{id}','Artikel_controller@delete');
});

Auth::routes();

Route::get('/home', function(){
	return redirect('/admin/beranda');
});
