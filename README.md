# 🏥 BMI Calculator - Kalkulator Status Gizi

Aplikasi web untuk menghitung Indeks Massa Tubuh (IMT/BMI) dan menentukan status gizi untuk orang dewasa berdasarkan klasifikasi nasional Indonesia.

**Dibuat oleh:** Salma Kafa Rikha Lada

---

## 📋 Daftar Isi
1. [Fitur Aplikasi](#fitur-aplikasi)
2. [Persyaratan Sistem](#persyaratan-sistem)
3. [Panduan Instalasi Lengkap](#panduan-instalasi-lengkap)
4. [Cara Menjalankan Aplikasi](#cara-menjalankan-aplikasi)
5. [Cara Menggunakan Aplikasi](#cara-menggunakan-aplikasi)

---

## ✨ Fitur Aplikasi

- 🧮 **Kalkulator BMI Real-time** - Hitung status gizi secara instant
- 📊 **Penjelasan Lengkap** - Informasi tentang status gizi dan BMI
- 📱 **Responsive Design** - Bekerja sempurna di desktop, tablet, dan mobile
- 🌈 **Tema Kesehatan** - Desain menarik dengan tema kesehatan
- 💚 **Rekomendasi Kesehatan** - Saran berdasarkan hasil BMI

---

## 🖥️ Persyaratan Sistem

Sebelum instalasi, pastikan komputer Anda memiliki:

1. **PHP 8.2 atau lebih tinggi**
2. **Composer** (Package Manager PHP)
3. **Git** (untuk mengunduh project dari GitHub)

---

## 📥 Panduan Instalasi Lengkap

### Langkah 1: Download dan Install PHP

#### Untuk Windows:
1. Buka website: **https://windows.php.net/download/**
2. Download versi **Thread Safe** (contoh: php-8.2.x-Win32-vs16-x64.zip)
3. Extract file ZIP ke folder: `C:\php` (atau folder pilihan Anda)
4. Rename file `php.ini-production` menjadi `php.ini`
5. Setup environment variable (agar PHP bisa diakses dari Command Prompt):
   - Klik **Start Menu** → Cari "Environment Variables"
   - Klik "Edit the system environment variables"
   - Klik tombol **Environment Variables**
   - Di bagian "System variables" klik **New**
   - Variable name: `PHP_HOME`
   - Variable value: `C:\php` (sesuai folder Anda)
   - Klik OK
   - Cari variable **Path** → Edit → New → tambahkan `%PHP_HOME%`
   - Klik OK sampai selesai
6. Buka Command Prompt / PowerShell → ketik: `php -v` (jika tampil versi, instalasi berhasil)

**Alternatif Mudah:** Download **PHP portable** dari https://www.apachelounge.com/

---

### Langkah 2: Download dan Install Composer

1. Buka website: **https://getcomposer.org/download/**
2. Download **Composer-Setup.exe** (untuk Windows)
3. Jalankan file installer
4. Ikuti wizard instalasi (tekan Next sampai selesai)
5. Pastikan path PHP terdeteksi otomatis
6. Buka Command Prompt / PowerShell → ketik: `composer -v` (jika tampil versi, instalasi berhasil)

---

### Langkah 3: Download Git (Opsional tapi Direkomendasikan)

1. Buka website: **https://git-scm.com/download/win**
2. Download installer untuk Windows
3. Jalankan file installer dengan pengaturan default
4. Selesai

---

### Langkah 4: Unduh Project dari GitHub

#### Opsi A: Menggunakan Git (Rekomendasi)
```bash
git clone https://github.com/Rendiansyah2/bmi-calculator.git
cd bmi-calculator
```

#### Opsi B: Download Manual
1. Buka: **https://github.com/Rendiansyah2/bmi-calculator**
2. Klik tombol **Code** (hijau) → **Download ZIP**
3. Extract file ZIP ke folder pilihan Anda
4. Buka Command Prompt / PowerShell di folder tersebut

---

### Langkah 5: Install Dependencies

Buka Command Prompt / PowerShell di folder project dan jalankan:

```bash
composer install
```

**Catatan:** Proses ini akan mendownload semua library yang dibutuhkan. Tunggu sampai selesai (bisa 2-5 menit).

---

### Langkah 6: Setup File Konfigurasi

1. Copy file `.env.example` menjadi `.env`:
   - **Untuk Windows PowerShell:**
     ```bash
     Copy-Item .env.example .env
     ```
   - **Atau manual:** Rename file `.env.example` menjadi `.env`

2. Generate application key:
   ```bash
   php artisan key:generate
   ```

---

## 🚀 Cara Menjalankan Aplikasi

Setelah semua instalasi selesai, jalankan server Laravel dengan perintah:

```bash
php artisan serve
```

**Output yang muncul:**
```
INFO  Server running on [http://127.0.0.1:8000].
Press Ctrl+C to stop the server
```

Kemudian buka browser Anda dan akses: **http://127.0.0.1:8000**

---

## 📖 Cara Menggunakan Aplikasi

### Menghitung BMI:

1. **Scroll ke halaman utama** - Baca penjelasan tentang status gizi
2. **Masukkan Data:**
   - Berat Badan (dalam kg) - Contoh: 65
   - Tinggi Badan (dalam cm) - Contoh: 170
3. **Klik tombol "Hitung IMT"**
4. **Lihat Hasil:**
   - Nilai BMI Anda
   - Kategori Status Gizi
   - Rekomendasi kesehatan khusus

### Klasifikasi Status Gizi (Nasional Indonesia):

| Kategori | Range IMT | Warna |
|----------|-----------|-------|
| Kurus (Tingkat Berat) | < 17,0 | Biru |
| Kurus (Tingkat Ringan) | 17,0 - 18,4 | Orange |
| Normal | 18,5 - 25,0 | Hijau |
| Gemuk (Tingkat Ringan) | 25,1 - 27,0 | Kuning |
| Gemuk (Tingkat Berat) | > 27,0 | Merah |

---

## 🛠️ Troubleshooting

### Error: "php command not found"
- Pastikan PHP sudah diinstall dengan benar
- Restart Command Prompt setelah setup Environment Variables

### Error: "composer command not found"
- Pastikan Composer sudah diinstall
- Restart Command Prompt setelah instalasi

### Error: "No application encryption key has been defined"
- Jalankan: `php artisan key:generate`

### Port 8000 sudah terpakai
- Gunakan port lain: `php artisan serve --port=8001`

---

## 📚 Resource Tambahan

- **Laravel Official:** https://laravel.com
- **PHP Official:** https://www.php.net
- **Composer:** https://getcomposer.org

---

## 📄 Lisensi

Project ini menggunakan lisensi MIT.

---

**Pertanyaan atau masalah?** Hubungi Salma Kafa Rikha Lada atau buka Issue di GitHub.


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
