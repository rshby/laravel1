# laravel1
 Latihan laravel

=> Membuat Project Laravel 
composer create-project --prefer dist laravel/laravel nama_folder
contoh:
composer create-project --prefer-dist laravel/laravel blog


=> Routes 

routes/web.php
Route::get('/link', 'nama_Controller@method');
contoh : Route::get('/home', 'HomeController@index');


=> Setting Database

file .env DB_DATABASE=nama_database


=> Membuat Controller sekaligus model
cmd : php artisan make:controller nama_controller -r -m nama_model
contoh:
php artisan make:controller StudentsController -r -m Student


=> Membuat base template layout
buat folder spesifik di dalam folder view
views/nama_folder
buat file : nama_file.blade.php
hal yang ingin dirubah : @yield('nama_komponen')
contoh:
views/template/base.blade.php
container atau isi : @yield('container')


=> Mengisi tampilan dari template
buat folder views/nama_folder
buat file di views/namafolder/nama_file.blade.php
di isi baris pertama : @extends('folder_template/nama_file');
untuk isian 1 baris: @section('nama_komponen', 'inputan')
untuk banyak baris :
@section('nama_komponen')
	sintaks_html
@endcection
contoh:
file di views/students/index.blade.php
isi file ...
@extends('template/base')
@section('judul', 'Selamat Datang')
@section('container')
	<div>
	........
	</div>
@endsection


=> membuat tabel dari php artisan
cmd : php artisan make:migration create_namaTabel_table
contoh:
php artisan make:migration create_students_table


=> Membuat field tabel
buka folder database/migrations
function up di isi
$table->bigIncrements('nama_tabel_auto_increment');
$table->tipe_data('nama_tabel', size)->unique();
contoh:
$table->bigIncrements('id');
$tabel->char('nim', 9)->unique();


=> Migrate
cmd : php artisan migrate. Untuk memasukkan tabel ke database

=> get Database
pada controller, diatas tambahkan use App\nama_model
pada function index, tambahkan... 
$variabel = nama_model::all();
return view('folder/nama_file', compact('variabel'));
dalam file views/nama_folder/nama_file.blade.php
@foreach($variabel as $alias)
   <p>{{ $alias-> nama_tabel_database }}</p>
@andforeach
contoh:
di controller sebelum class : use App\Student;
fungsi index ...
$students = Student::all();
return view('students/index', compact('variabel'));
dalam file di views/students/index.blade.php
@foreach($students as $std)
   <p>Nama : {{ $std->nama }}</p>
@endforeach 
