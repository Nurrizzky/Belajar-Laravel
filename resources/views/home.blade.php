<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   @section('title')
      <title>Home</title>
   @endsection
   <style>
      .hero-section {
         animation: mymove 2s ease-in-out;
      }
      @keyframes mymove {
         0% {
            transform: translateX(-100%);
            opacity: 0;
         }
         100% {
            transform: translateX(0);
            opacity: 1;
         }
      }
   </style>
</head>
<body>

@extends('layout.layout')

@section('main')
   
   <div class=" hero-section text-dark" style=" font-family: 'Space Grotesk', sans-serif; font-weight: 700; width: 100%; height: 100vh; display: flex; text-align: center; flex-direction: column; justify-content: center; align-items: center">
      <h1 style="font-weight: 700;  font-size: 100px">PHP FRAMEWORK</h1>
      <h2 style="font-weight: 500; color: #ff0000; text-decoration: underline; font-style: italic; padding-bottom: 10px ; font-size: 70px;">for Web Development</h2>
   </div>

   <div class=" mb-5" style="width: 100%; display: flex; text-align: left; justify-content: center; align-items: center">
      <img src="https://www.logo.wine/a/logo/Laravel/Laravel-Logo.wine.svg" width="350" alt="">
      <div class="">
         <h1 style="text-align: left; margin-bottom: 50px">Apa itu Laravel ?</h1>
         <p style="margin-left: 20px"> <span style="text-decoration: underline; font-weight: 700; font-size: 20px"><mark class=" px-2"> Laravel </mark></span> adalah salah satu framework PHP yang paling populer dan banyak digunakan untuk pengembangan aplikasi web. Framework ini dirancang untuk membuat proses pengembangan web lebih sederhana, efisien, dan menyenangkan bagi para developer. Laravel menyediakan berbagai fitur yang memudahkan developer dalam membangun aplikasi web modern dengan cepat.</p>
         <button class="btn text-light" style="padding: 5px 30px; background-color: #ff0000; margin-left: 18px">Learn</button>
      </div>
   </div>
   <div class="mt-5 container" style="width: 90%">
      <h3>Fitur Keunggulan Laravel</h3>
      <ol>
         <li>Routing yang Fleksibel: Laravel memiliki sistem routing yang sederhana namun fleksibel. Dengan routing ini, developer dapat mengatur URL dan memetakan ke berbagai fungsi atau controller dengan mudah.</li>
         <li>Eloquent ORM (Object Relational Mapping): Eloquent adalah ORM bawaan Laravel yang memudahkan interaksi dengan database. Dengan Eloquent, developer bisa menulis query database menggunakan sintaks PHP yang lebih intuitif.</li>
         <li>Blade Templating Engine: Laravel menyediakan sistem templating bernama Blade yang memungkinkan pengelolaan view secara efisien. Blade mendukung penggunaan kontrol logika seperti perulangan dan kondisi langsung dalam file HTML, tanpa mengurangi performa aplikasi.
         </li>
         <li>Middleware dan Autentikasi: Laravel memiliki sistem middleware yang bisa digunakan untuk menangani permintaan HTTP. Salah satu implementasinya adalah fitur autentikasi pengguna yang mudah dan aman.</li>
         <li>Artisan Console: Laravel memiliki tool command-line bernama Artisan yang memudahkan berbagai tugas, seperti migrasi database, seeding, pembuatan controller, dan lain-lain. Ini membantu mempercepat pengembangan aplikasi.</li>
      </ol>
      <h3>Keuntungan Laravel</h3>
      <ol>
         <li>Keamanan: Laravel memiliki berbagai mekanisme keamanan bawaan seperti hashing password, proteksi terhadap serangan CSRF, dan SQL Injection. Ini membantu memastikan bahwa aplikasi yang dibangun tetap aman.</li>
         <li>Dukungan Komunitas: Laravel memiliki komunitas yang sangat besar dan aktif. Jika developer menghadapi masalah, ada banyak tutorial, dokumentasi, dan forum tempat mereka bisa mendapatkan bantuan.</li>
         <li>Modular dan Scalable: Struktur Laravel sangat modular, memungkinkan developer untuk menambahkan fitur-fitur baru secara mudah tanpa mengubah banyak kode yang sudah ada. Laravel juga mendukung pengembangan aplikasi yang berskala besar.</li>
      </ol>
   </div>
   <div class="container mt-5" style="width: 85%">
      <h3>Mengapa PHP ?</h3>
      <p>PHP adalah bahasa pemrograman yang sangat populer untuk pengembangan web. Sebagai bahasa server-side, PHP dapat digunakan untuk membangun aplikasi web dinamis yang berinteraksi dengan database, menangani permintaan pengguna, dan menghasilkan halaman web secara real-time.</p>
      <h3>Keunggulan PHP</h3>
      <ol>
         <li>Mudah Dipelajari: PHP dikenal sebagai bahasa yang mudah dipelajari, terutama bagi pemula yang baru mengenal pemrograman web.</li>
         <li>Kompatibilitas yang Luas: PHP dapat berjalan di berbagai platform (Windows, Linux, Mac OS), dan kompatibel dengan hampir semua web server yang ada, seperti Apache dan Nginx.</li>
         <li>Open-Source dan Gratis: PHP bersifat open-source, sehingga bisa digunakan secara gratis oleh siapapun tanpa harus membayar lisensi.</li>
         <li>Framework yang Banyak: Selain Laravel, PHP memiliki banyak framework lain seperti Symfony, CodeIgniter, dan Zend yang memudahkan pengembangan aplikasi web.</li>
      </ol>
   </div>

   <div class="container mt-5" style="width: 90%">
      <h2>Kesimpulan</h2>
      <p>Laravel dan PHP merupakan kombinasi yang sangat kuat untuk membangun aplikasi web yang aman, efisien, dan scalable. Dengan berbagai fitur yang ditawarkan oleh Laravel, pengembang dapat menciptakan aplikasi yang lebih modern dan responsif. Baik untuk proyek kecil maupun aplikasi berskala besar, Laravel dengan dukungan dari PHP mampu menjadi solusi yang tepat bagi developer.
         Untuk mulai belajar Laravel, disarankan untuk memahami dasar-dasar PHP terlebih dahulu karena Laravel dibangun di atas PHP. Setelah itu, dokumentasi Laravel yang lengkap dapat dijadikan panduan untuk memulai membangun aplikasi web.</p>
   </div>

   <footer style="width: 100%; height: 100px; background-color: red; text-align: center; color: white; border-radius: 10px; display: flex; justify-content: center; align-items: center">
      <p>Muhammad Nur Rizky &copy; 2024</p>
   </footer>


@endsection

</body>
</html>