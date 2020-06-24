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
>> Belajar pengaturan konfigurasi
    - cek folder config\majalah.php
    - cek routes\web.php 