# 🕌 Ponpes Cianjur – Sistem Informasi Pesantren

**Ponpes Cianjur** adalah sistem informasi berbasis web yang dirancang untuk membantu pengelolaan data di lingkungan Pondok Pesantren. Aplikasi ini bertujuan untuk memudahkan pengelolaan santri, data guru, jadwal kegiatan, dan administrasi lainnya.

---

## 🎯 Fitur Utama

* 📋 Pendataan santri dan ustadz
* 🗓 Manajemen jadwal pelajaran dan kegiatan pesantren
* 💬 Sistem pengumuman internal
* 💾 Laporan bulanan atau tahunan (opsional)
* 🛠 Panel admin untuk mengelola semua data

---

## 🛠 Teknologi

* **Backend:** Laravel (PHP)
* **Frontend:** Blade + Tailwind CSS
* **Database:** MySQL
* **Asset bundler:** Laravel Vite

---

## 📥 Instalasi

Untuk menjalankan proyek ini di lingkungan lokal Anda, ikuti langkah-langkah berikut:

1.  **Clone repository:**
    ```bash
    git clone [https://github.com/Gapraaa/ponpes_cianjur.git](https://github.com/Gapraaa/ponpes_cianjur.git)
    cd ponpes_cianjur
    ```

2.  **Install dependensi:**
    ```bash
    composer install
    npm install
    npm run dev
    ```

3.  **Setup environment:**
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4.  **Konfigurasi database di `.env`:**
    ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=ponpes_cianjur
    DB_USERNAME=root
    DB_PASSWORD=
    ```

5.  **Jalankan migrasi:**
    ```bash
    php artisan migrate
    ```

6.  **Jalankan server lokal:**
    ```bash
    php artisan serve
    ```
    Akses aplikasi melalui browser Anda di: `http://localhost:8000`

---

## 📁 Struktur Proyek

* `app/` > Model, Controller, Middleware
* `database/` > Migration & Seeder
* `public/` > File publik (gambar, css, js)
* `resources/`
    * `views/` > Blade template
    * `css/js/` > Aset frontend
* `routes/` > Web routes

---

## 🔐 Akses

* Login admin dibutuhkan untuk menggunakan sistem.
* Aplikasi ini hanya untuk penggunaan internal pesantren.

---

## 📄 Lisensi

Proyek ini dirilis di bawah [lisensi MIT](https://opensource.org/licenses/MIT). Bebas digunakan dan dikembangkan sesuai kebutuhan.

Sistem ini dibuat untuk menunjang kebutuhan administrasi pesantren secara digital.