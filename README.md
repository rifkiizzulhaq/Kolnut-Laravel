# Kolnut — Backend API & Admin Dashboard

**Kolnut** adalah aplikasi berbasis web dan mobile untuk membantu pengguna dalam mengidentifikasi **jenis makanan** serta mendapatkan **rekomendasi gizi dan tips makanan sehat** menggunakan teknologi kecerdasan buatan (AI).

Repositori ini adalah bagian **Backend** dari ekosistem Kolnut, dibangun menggunakan **Laravel 10**, yang berfungsi sebagai:
- **REST API** — melayani aplikasi mobile (React Native)
- **Admin Dashboard** — untuk mengelola konten tips makanan
- **Jembatan ke AI** — meneruskan gambar yang di-scan ke server AI (Python FastAPI) dan mengembalikan hasilnya ke aplikasi mobile

---

## Arsitektur Proyek

Proyek Kolnut terdiri dari 3 bagian yang saling terhubung:

```
[Android App: Kolnut-React-Native]
        |
        | (HTTP Request via Axios)
        ↓
[Backend: Kolnut-Laravel (repo ini)]  ←→  [Admin Browser]
        |
        | (cURL: POST /uploadgambar/)
        ↓
[AI Server: Model-AI-Detection-Objek-Tensorflow (Python FastAPI)]
```

---

## Fitur Utama

| Fitur | Keterangan |
|---|---|
| **Autentikasi** | Register, Login, Logout menggunakan Laravel Sanctum (token-based) |
| **Role & Permission** | Manajemen hak akses menggunakan `spatie/laravel-permission` |
| **Scan Makanan** | Menerima gambar dari mobile, meneruskan ke AI server, mengembalikan hasil klasifikasi |
| **Tips Makanan** | CRUD artikel/tips makanan yang bisa dikelola oleh Admin |
| **Rekomendasi AI** | Data rekomendasi makanan berdasarkan hasil analisis AI |
| **Admin Dashboard** | Antarmuka web untuk admin mengelola konten menggunakan Blade + Tailwind CSS |

---

## Tech Stack

- **Framework**: Laravel 10
- **PHP**: ^8.1
- **Database**: MySQL
- **Autentikasi API**: Laravel Sanctum
- **Role Management**: Spatie Laravel Permission
- **Frontend Admin**: Laravel Breeze + Tailwind CSS + Vite
- **HTTP Client ke AI**: cURL (built-in PHP)

---


## Setup & Instalasi

### Prasyarat
Pastikan software berikut sudah terinstal di komputer Anda:
- **PHP** >= 8.1
- **Composer**
- **Node.js** >= 18 & **NPM**
- **MySQL** (bisa via XAMPP, Laragon, atau lainnya)

---

### Langkah 1 — Install Dependensi
```bash
composer install
npm install
```

### Langkah 2 — Konfigurasi Environment
Salin file `.env.example` menjadi `.env`:
```bash
cp .env.example .env
```

Buka file `.env` dan sesuaikan konfigurasi database:
```env
APP_NAME=Kolnut
APP_URL=http://localhost:8888

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=kolnut        # Sesuaikan dengan nama database Anda
DB_USERNAME=root          # Sesuaikan username MySQL Anda
DB_PASSWORD=              # Sesuaikan password MySQL Anda
```

### Langkah 3 — Generate Application Key
```bash
php artisan key:generate
```

### Langkah 4 — Buat Database & Jalankan Migrasi
Buat database baru di MySQL dengan nama yang sama seperti yang Anda isi di `DB_DATABASE` (misal: `kolnut`), lalu jalankan:
```bash
php artisan migrate
```

> Perintah ini akan membuat semua tabel secara otomatis, termasuk: `users`, `tips_makanans`, `ai_rekomendasis`, dan tabel permission dari Spatie.

### Langkah 5 — Build Asset Frontend (Admin Dashboard)
```bash
npm run dev
```

### Langkah 6 — Jalankan Server

Untuk development lokal biasa:
```bash
php artisan serve
```

Untuk agar bisa **diakses oleh HP Android** di jaringan yang sama (diperlukan untuk integrasi dengan app mobile):
```bash
php artisan serve --host=0.0.0.0 --port=8888
```

> Server akan berjalan dan siap menerima request dari aplikasi mobile di `http://<IP-PC-Anda>:8888`

---

## Koneksi ke AI Server

Endpoint `/api/scan` akan secara otomatis meneruskan gambar ke server AI Python lokal yang harus berjalan di `http://127.0.0.1:8000`. Pastikan server AI sudah aktif sebelum menggunakan fitur scan.

Lihat repositori [Model-AI-Detection-Objek-Tensorflow](../Model-AI-Detection-Objek-Tensorflow) untuk panduan menjalankan server AI.

---


## Lisensi

Proyek ini menggunakan lisensi [MIT License](https://opensource.org/licenses/MIT).
