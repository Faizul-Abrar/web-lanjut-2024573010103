# Laporan Modul 1: Perkenalan Laravel
**Mata Kuliah:** Workshop Web Lanjut   
**Nama:** Faizul Abrar  
**NIM:** 2024573010103  
**Kelas:** TI 2C 

---

## Abstrak 
Tuliskan ringkasan singkat tentang isi laporan ini dan tujuan Anda membuat laporan.

Laporan ini membahas pengenalan dasar framework Laravel, termasuk teori singkat, komponen utama, serta struktur folder yang ada dalam sebuah proyek Laravel. Tujuannya adalah agar mahasiswa memahami konsep dasar Laravel sebelum memulai praktik pengembangan web lanjutan. Dengan laporan ini, diharapkan mahasiswa dapat mengenali fitur-fitur utama Laravel dan bagaimana framework ini mempermudah pembangunan aplikasi berbasis web.

---

## 1. Pendahuluan
- Tuliskan teori perkenalan tentang laravel

Laravel adalah framework PHP open-source yang dibuat oleh Taylor Otwell pada tahun 2011 untuk menyederhanakan pengembangan aplikasi web

- Apa itu Laravel?

Laravel adalah framework web PHP yang populer dan framework yang high level, bersifat opinionated dan open source, di rancang untuk membangun aplikasi web modern yang skalabel dan aman
- Karakteristik utama (MVC, opinionated, dsb.)

karakteristik utama dari laravel 
opinionated : punya aturan dan konvensi tertentu
Model View Controller : sebuah metode untuk membuat sebuah aplikasi dengan memisahkan data dari tampilan dan cara bagaimana memprosesnya.

- Untuk jenis aplikasi apa Laravel cocok?
laravel cocok digunakan untuk aplikasi yang kompleks

---

## 2. Komponen Utama Laravel 
- Blade : sistem tempalte bawaan untuk merender view
- Eloquent : ORM bawaan untuk berinteraksi dengan basis data 
- Routing : sistem routing yang sangat dinamis dan mudah di gunakan
- Controllers : kelas PHP yang bertindak sebagai perantara dalam pola MVC 
- Migrations & Seeders : mengelola dan menerapkan perubahan skema database , membuat data uji untuk model
- Artisan CLI : mengelola aplikasi laravel dengan artisan
- Testing : menjalankan unit test dan feature test
(Tambahkan komponen lain jika ingin)

---

## 3. Berikan penjelasan untuk setiap folder dan files yang ada didalam struktur sebuah project laravel.

- .gitignore

Digunakan untuk menentukan file atau folder yang tidak ingin di-commit ke repository Git.
Contohnya: file cache, vendor, atau konfigurasi lokal.

- README.md

File dokumentasi utama untuk repository.
Biasanya berisi deskripsi project, cara instalasi, dan cara penggunaan.
Untuk sementara dibiarkan kosong sesuai instruksi.

- laporan/

Folder yang menyimpan semua laporan modul perkuliahan.

- laporan1/

Folder khusus laporan Modul 1.

- laporan.md

File laporan utama dalam format Markdown.
Berisi isi laporan sesuai format (Abstrak, Pendahuluan, Komponen, dsb.).

- gambar/

Folder untuk menyimpan gambar pendukung laporan.
Contoh: diagram MVC.

gambar.png

Contoh gambar yang dimasukkan ke laporan.

- projects/

Folder kosong sebagai placeholder.
Nantinya akan diisi project Laravel dari tiap modul praktikum.
seperti :

- app/ → Berisi logika utama aplikasi (Models, Controllers, Middleware).

- bootstrap/ → File untuk mem-booting framework dan mengatur autoloading.

- config/ → File konfigurasi (database, mail, cache, dll.).

- database/ → Berisi migrations, seeders, dan factories.

- public/ → Folder akses publik (index.php, asset CSS/JS/gambar).

- resources/ → Berisi view (Blade), file bahasa, dan assets mentah (CSS/JS).

- routes/ → File routing aplikasi (web.php, api.php).

- storage/ → File sementara (cache, logs, compiled views, file upload).

- tests/ → Berisi file testing (unit & feature).

- vendor/ → Berisi dependensi dari Composer.

- .env → File konfigurasi lingkungan (database, key, dll.).
---

## 4. Diagram MVC dan Cara kerjanya

![Gambar MVC](/laporan/laporan1/gambar/mvc.png)
Diagram MVC menggambarkan bagaimana request pengguna diproses:

User mengakses URL tertentu → masuk ke Route.

Route memanggil Controller yang berisi logika bisnis.

Controller berinteraksi dengan Model untuk mengakses/mengubah data.

Hasil dikirimkan ke View (Blade) untuk ditampilkan ke user.
---

## 6. Kelebihan & Kekurangan (refleksi singkat)
Kelebihan Laravel menurut Anda
Kelebihan Laravel:

- Sintaks elegan & mudah dibaca.
- Dokumentasi lengkap.
- Fitur bawaan banyak (auth, routing, ORM, dll.).
- Dukungan komunitas luas.

Kekurangan / Tantangan bagi Pemula:
Hal yang mungkin menjadi tantangan bagi pemula

- Instalasi & konfigurasi awal cukup rumit bagi yang baru belajar.
- Performa bisa lebih berat dibanding framework minimalis.
- Harus terbiasa dengan konsep MVC agar mudah memahami alur.

---

## 7. Referensi

Dokumentasi Resmi Laravel — https://laravel.com/docs
Kelebihan & Kengurangan Laravel — https://glints.com/id/lowongan/laravel-adalah
Tutorial Laravel untuk pemula  — https://www.malasngoding.com/tutorial/laravel

---
