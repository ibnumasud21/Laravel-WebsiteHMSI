<?php

//ROUTE HOME CONTROLLER USER & ADMIN
Route::get('/', function(){
  return view('userhome');
});
Route::get('/profile/user', function(){
  return view('userprofile');
});
Route::get('/news/user', function(){
  return view('usernews');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/feedback', function () {
    return view('feedback');
});
Route::get('/welcome', function(){
    return view('welcome');
});
Route::get('/calendar/user', function(){
  return view('usercalendar');
});
Route::get('/calendar', function(){
    return view('calendar');
});
Route::get('/profile', function(){
  return view('profile');
});

//ROUTE NEWS USER & ADMIN
Route::get('/news/user', function(){
  $feed = simplexml_load_file('http://fetchrss.com/rss/5cda37df8a93f8492e8b45675cda37ba8a93f8a72b8b4567.xml');
  $worldfeeds = [];

  for($i=0; $i<5; $i++){
    $worldfeeds[$i] = $feed->channel->item[$i];
  }
  return View::make('usernews')->with('worldfeeds', $worldfeeds);
});
Route::get('/news', function(){
  $feed = simplexml_load_file('http://fetchrss.com/rss/5cda37df8a93f8492e8b45675cda37ba8a93f8a72b8b4567.xml');
  $worldfeeds = [];

  for($i=0; $i<5; $i++){
    $worldfeeds[$i] = $feed->channel->item[$i];
  }
  return View::make('news')->with('worldfeeds', $worldfeeds);
});

//------------------ROUTE----------------------//

Route::get('/home', 'HomeController@home');
Route::get('/profile', 'HomeController@profile');
Route::get('/calendar', 'HomeController@calendar');
Route::get('/about', 'HomeController@about');
Route::get('/feedback', 'HomeController@feedback');
Route::get('calendar/user', 'TaskController@usercalendar');
Route::get('/calendar', 'TaskController@calendar');
Route::get('/calendar/tambah', 'TaskController@tambahcalendar');
Route::post('/calendar/tambah', 'TaskController@tambah');
Route::get('/calendar/edit/{id}', 'TaskController@editcalendar');
Route::put('/calendar/edit/{id}', 'TaskController@edit');

//------------------ROUTE MAHASISWA ADMIN--------------------//

Route::get('/data/mahasiswa', 'MahasiswaController@datamahasiswa');
Route::get('/data/mahasiswa/tambah', 'MahasiswaController@tambahdatamahasiswa');
Route::post('/data/mahasiswa/tambah', 'MahasiswaController@tambah');
Route::get('/data/mahasiswa/edit/{nim}','MahasiswaController@editdatamahasiswa');
Route::put('/data/mahasiswa/edit/{nim}', 'MahasiswaController@edit');
Route::get('/data/mahasiswa/hapus/{nim}', 'MahasiswaController@hapus');
Route::get('/data/mahasiswa/cari', 'MahasiswaController@cari');

//------------------ROUTE MAHASISWA USER---------------------//

Route::get('/data/mahasiswa/user', 'MahasiswaController@userdatamahasiswa');
Route::get('/data/mahasiswa/user/carii', 'MahasiswaController@carii');

//-----------------ROUTE DEPARTEMEN ADMIN-------------------//

Route::get('/data/departemen', 'DepartemenController@datadepartemen');
Route::get('/data/departemen/tambah', 'DepartemenController@tambahdatadepartemen');
Route::post('/data/departemen/tambah', 'DepartemenController@tambah');
Route::get('/data/departemen/edit/{id_departemen}', 'DepartemenController@editdatadepartemen');
Route::put('/data/departemen/edit/{id_departemen}', 'DepartemenController@edit');
Route::get('/data/departemen/hapus/{id_departemen}', 'DepartemenController@delete');
Route::get('/data/departemen/hapus/{id_departemen}', 'DepartemenController@delete');

//-----------------ROUTE DEPARTEMEN USER--------------------//

Route::get('/data/departemen/user', 'DepartemenController@userdatadepartemen');

//-----------------ROUTE ANGKATAN ADMIN---------------------//

Route::get('/data/angkatan', 'AngkatanController@dataangkatan');
Route::get('/data/angkatan/tambah', 'AngkatanController@tambahdataangkatan');
Route::post('/data/angkatan/tambah', 'AngkatanController@tambah');
Route::get('/data/angkatan/edit/{id_angkatan}', 'AngkatanController@editdataangkatan');
Route::put('/data/angkatan/edit/{id_angkatan}', 'AngkatanController@edit');
Route::get('/data/angkatan/hapus/{id_angkatan}', 'AngkatanController@delete');

//------------------ROUTE ANGKATAN USER---------------------//

Route::get('/data/angkatan/user', 'AngkatanController@userdataangkatan');

//------------------ROUTE PRESTASI ADMIN-------------------//

Route::get('/data/prestasi', 'PrestasiController@dataprestasi');
Route::get('/data/prestasi/tambah', 'PrestasiController@tambahdataprestasi');
Route::post('/data/prestasi/tambah', 'PrestasiController@tambah');
Route::get('/data/prestasi/edit/{id_prestasi}', 'PrestasiController@editdataprestasi');
Route::put('/data/prestasi/edit/{id_prestasi}', 'PrestasiController@edit');
Route::get('/data/prestasi/hapus/{id_prestasi}', 'PrestasiController@delete');

//------------------ROUTE PRESTASI USER--------------------//

Route::get('/data/prestasi/user', 'PrestasiController@userdataprestasi');

//------------------ROUTE DOSEN ADMIN----------------------//

Route::get('/data/dosen', 'DosenController@datadosen');
Route::get('/data/dosen/tambah', 'DosenController@tambahdatadosen');
Route::post('/data/dosen/tambah', 'DosenController@tambah');
Route::get('/data/dosen/edit/{id_dosen}', 'DosenController@editdatadosen');
Route::put('/data/dosen/edit/{id_dosen}', 'DosenController@edit');
Route::get('/data/dosen/hapus/{id_dosen}', 'DosenController@delete');

//------------------ROUTE DOSEN USER------------------------//

Route::get('/data/dosen/user', 'DosenController@userdatadosen');

//-----------------ROUTE PRODI ADMIN-----------------------//

Route::get('/data/prodi', 'ProdiController@dataprodi');
Route::get('/data/prodi/tambah', 'ProdiController@tambahdataprodi');
Route::post('/data/prodi/tambah', 'ProdiController@tambah');
Route::get('/data/prodi/edit/{id_program_studi}', 'ProdiController@editdataprodi');
Route::put('/data/prodi/edit/{id_program_studi}', 'ProdiController@edit');
Route::get('/data/prodi/hapus/{id_program_studi}', 'ProdiController@delete');

//-----------------ROUTE PRODI USER------------------------//

Route::get('/data/prodi/user', 'ProdiController@userdataprodi');

//-----------------ROUTE FEEDBACK-------------------//

Route::get('/feedback/tambah', 'HomeController@userfeedback');
Route::post('/feedback/tambah', 'HomeController@tambah');
Route::get('/feedback/hapus/{id}', 'HomeController@hapus');


//(   ?   )

Auth::routes();
Route::get('/home', function () {
    return view('home');
});
Route::get('signin', 'SigninController@form')->name('signin.form');
Route::post('attempt', 'SigninController@attempt')->name('signin.attempt');
Route::get('/home', 'HomeController@home');

Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);
