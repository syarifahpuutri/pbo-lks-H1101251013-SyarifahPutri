# REST API Perpustakaan — Praktikum PBO

## Identitas Mahasiswa
- **Nama:** Syarifah Putri
- **NIM:** H1101251013
- **Kelas :** Pemrograman Berorientasi Objek (B)
- **Program Studi:** Sistem Informasi
- **Universitas:** Universitas Tanjungpura

## Deskripsi Proyek
Proyek ini merupakan aplikasi sistem informasi perpustakaan berbasis REST API menggunakan PHP modern, MySQL, Composer, dan JavaScript. Aplikasi menyediakan pengelolaan data buku dan kategori serta dashboard informasi perpustakaan.

## Fitur Aplikasi
- Dashboard: menampilkan ringkasan jumlah buku, stok, dan kategori.
- Manajemen Buku: tambah, tampil, ubah, dan hapus data buku.
- Manajemen Kategori: tambah, tampil, ubah, dan hapus kategori.
- Integrasi frontend dengan REST API.
- Notifikasi (toast) untuk hasil operasi.

## Teknologi
- PHP 8+
- MySQL
- Composer dan PSR-4
- JavaScript ES Modules
- HTML dan Tailwind CSS
- cURL dan Postman

## Struktur Proyek
- `src/` — kode backend aplikasi.
- `public/` — Front Controller REST API.
- `database/` — skema database.
- `tests/` — pengujian aplikasi.
- `frontend-perpustakaan/` — antarmuka pengguna.
- `screenshot-final/` — dokumentasi tampilan akhir.

## Cara Menjalankan

### Backend
Masuk ke folder `rest-api-perpustakaan`, kemudian jalankan:

```bash
php -S localhost:8000 -t public
```

### Frontend
Masuk ke folder `frontend-perpustakaan`, kemudian jalankan:

```bash
php -S localhost:3001
```

Buka aplikasi melalui browser:

`http://localhost:3001/index.html`

Pastikan konfigurasi database sudah sesuai dengan file `.env`.

## Dokumentasi Screenshot
- Dashboard: `screenshot-final/dashboard.png`
- Halaman Buku: `screenshot-final/halaman-buku.png`
- Halaman Kategori: `screenshot-final/halaman-kategori.png`

## Repository
Proyek ini dibuat untuk memenuhi Lembar Kerja Mahasiswa Praktikum Pemrograman Berorientasi Objek (PBO), Universitas Tanjungpura.