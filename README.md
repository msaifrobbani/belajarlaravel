#Belajar LARAVEL#

.env untuk development ke konfigurasi
server.php adalah untuk menjalankan perintah php artisan serve
composer.json adalah untuk mengubah dependensi program kita

Folder app --> akan sangat mudah gemuk, banyak pokok aplikasi kita terjadi disini.
    - Console --> tidak banyak berubah
    - Exceptions --> untuk handler error
    - Http --> ada controller (jembatan antara view dan model) dan middleware. File Kernel.php untuk menghandle folder Middleware
    - File User.php --> namanya Model, sesuatu yang akan berinteraksi dengan Database

Folder Bootstrap --> bukan framework css bootstrap

Folder Config --> 
    file app.php -->
    file auth.php --> untuk authentification
    file database.php --> untuk mengatur database

Folder Database -->
    folder factories --> sebuah class yang digunakan untuk mendefinisikan value - value database yang kita miliki atau di field - field database yang kita miliki yang digunakan untuk mengenerate sebuah data dummy untuk kita test aplikasi
    folder migration --> file yang membuat tabel dengan migration ini. buat tabel dari file migration ini
    seeds --> untuk mengisi data dari tabel yang kita miliki.

Folder Public --> dimana aplikasi laravel ini dimulai. berisi asset-asset, css, dan js.
Folder Resources --> untuk bahan - bahan di web
    ada folder views yang nantinya akan banyak berubah. semua tampilan ada di folder Resources\Views

Folder Routes --> entry point untuk mendaftarkan URL apa aja yang di aplikasi kita.

Folder Storage --> tempat meyimpan file - file aplikasi kita
Folder Tests --> untuk membuat automatic testing, unit testing.

Folder Vendor --> folder untuk composer. 

Secara umum akan banyak bekerja di folder App dan resources juga database (untuk buat tabel-tabel). Yang intinya ada di folder app dan resources. 

Fungsi App Key adalah untuk meberikan keamanan aplikasi laravel kita. Sebagai sekuriti, digunakan untuk enkripsi

Log 1; 24/06/2020
    -> Belajar pengaturan konfigurasi
        - cek folder config\majalah.php
        - cek routes\web.php 

Log 2; 25/06/2020
    -> Routes merupakan entry point dari laravel

Log 3; 01/07/2020
    -> Ketika membuat aplikasi perlu untuk mendefinisikan banyak route yang kita butuhkan
    -> Route Group : memudahkan maintenance aplikasi yang sudah kita buat
    -> membuat route group didalam route group bisa

Log 4; 01/07/2020
    -> Route Alias Name untuk mempermudah penamaan route.

Log 5; 02/07/2020
    -> Route Resources dan API Resources
    -> dalam membuat CRUD minimal harus punya minimal 4-5 route tersebut
    -> Route Resources untuk menghandle CRUD supaya penulisan ROute tersebut jadi lebih simple
    -> Cara menggunakan Route Resources :
    -> 1. ketik perintah ini Route::resource('artikel', 'ArtikelController');
    -> 2. masukkan di terminal 'php artisan make:controller ArtikelController --resource'
    -> 3. Maka akan terbentuk controller lengkap dengan perintah CRUD

Log 6; 03/07/2020
    -> Route View adalah untuk sebuah URL menampilkan file view yang mana

Log 7; 03/07/2020
    -> membuat controller dengan php artisan make:controller ContohController --resource
    -> terus membuat route => Route::get('/artikel', 'ArtikelController@index')->name('artikel'); --> ArtikelController@index, controller@method-nya

Log 8; 03/07/2020
    -> ketika membuat controller dengan artisan ada 1 class yang selalu ikut, yaitu class illuminate

Log 9; 03/07/2020
    -> Controller untuk submit form 

Log 10; 04/07/2020
    ->menggunakan view

Log 11; 04/07/2020
    -> Kustomisasi Halaman Error 
        1. buat folder di views -> errors (contoh) -> buat file 404.blade.php

Log 12; 04/07/2020
    -> perlindungan dari CSRF
        input type="hidden" name="_token" value="{{ csrf_token() }}"

Log 13; 13/07/2020
    -> mengenal validasi form : gimana caranya biar form ketika tidak diisi menampilkan warning/tidak bisa diklik tombolnya
    -> yang digunakan adalah validate($request, [ // request adalah yang ditangkap oleh sistem
        'email' => 'required'  // ini adalah form yg ingin divalidasi, form email dengan rules-nya seprti apa
    ]);

Log 14; 15/07/2020
    -> kustomisasi Pesan Error pada Validasi
    -> yang digunakan adalah validate($request, [ // request adalah yang ditangkap oleh sistem
        'email' => 'required'  // ini adalah form yg ingin divalidasi, form email dengan rules-nya seprti apa
    ], [
        'email.required' => 'Email harus diisi', //kustomisasi pesan error
        'email.email'   => 'Isikan field sesuai dengan format email (gunakan @)', //kustomisasi pesan error
        'address.required' => 'Isi alamat kamu'
    ]);
    -> selain kustomisasi pesan error pada validasi dengan menggunakan pada controller tadi, bisa juga menggunakan validation.php di folder lang (di dalam folder resources)

Log 15; 16/07/2020
    -> validasi pesan error dengan gaya bootstrap 

Log 17; 16/07/2020
    -> Mengambil nilai request sebelumnya (Old Request)
    -> jdi ketika kita mengisi form, akan lebih mudah jika terdapat kesalahan kita tidak mengisi ulang tapi nilai requestnya yang sebelumnya masih ditampilkan.
    -> cara membuat class form request 'php artisan make:request NamaClassRequest'
    -> filenya ada di App -> HTTP -> Folder Request

Log 18; 17/07/2020
    -> Response dengan Redirect
    -> ada beberapa cara melakukan redirect :
     1. return redirect()->route('routeAlias');
     2. return redirect()->to('routeAlias');
     3. return redirect()->back(); atau return back();

Log 19; 17/07/2020
    -> Response dengan JSON
    -> caranya adalah 
      1. return response()->json($data);
    -> untuk response JSON digunakan untuk API

Log 20; 21/07/2020
    -> Dasar - dasar mengirim email
    cara membuatnya php artisan make:mail UserVerificationMail

Log 21; 21/07/2020
    -> Kirim email dengan Format Markdown
    hp artisan make:mail UserVerificationMail --markdown='emails.activation'

Log 22; 21/07/2020
    -> render view di Email
    return New UserActivationMail(); --> untuk melihat render view di email secara langsung

Log 23; 22/07/2020
    -> Konsep migration adalah untuk memudahkan kolaborasi ketika membangun sebuah sistem database bersama 
    -> php artisan make:migration create_users_table --> membuat table terlebih dahulu
    -> php artisan migrate --> untuk memigrasi table yang kita buat masuk ke dalam database
    -> untuk menambahkan field baru 
    php artisan make:migration add_phone_to_table_users --table=users
    ->cara menambahkan field baru dengan setelah kolom yang kita inginkan
    $table->string('field_baru',15)->after('field_lama);