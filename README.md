# Simple Article API 

API ini dibangun menggunakan Laravel 12 dan menyediakan endpoint CRUD untuk artikel dan kategori, serta sistem autentikasi menggunakan JWT. Dokumentasi API dapat diakses melalui Swagger UI.

---

## Deskripsi Singkat

Project ini merupakan backend API sederhana yang menyediakan fitur:
- Registrasi dan login menggunakan JWT
- Manajemen artikel (create, read, update, delete)
- Manajemen kategori
- Pagination  & search pada daftar artikel (10 data per halaman, pencarian berdasarkan title atau content)
- Dokumentasi API dengan Swagger
- Deployment API ke Railway: https://simple-article-api.up.railway.app/

---

## Cara Setup & Menjalankan di Lokal

1. **Clone repository**
   ```bash
   git clone https://github.com/lilcoderi/simple-article-api.git
   cd simple-article-api
2. **Install dependencies**
   ```bash
   composer install
3. **Copy file .env**
   ```bash
   cp .env.example .env
4. **Generate application key**
   ```bash
   php artisan key:generate
5. **Konfigurasi database**
   Buka file .env, lalu ubah nilai konfigurasi database sesuai lokal Anda
   ```bash
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=simple_article_db
   DB_USERNAME=root
   DB_PASSWORD=
6. **Migrasi dan seed database**
   ```bash
   php artisan migrate --seed
7. **Generate JWT secret**
   ```bash
   php artisan jwt:secret
8. **Jalankan server lokal**
   ```bash
   php artisan serve
9. **Akses Swagger UI**
   Setelah server berjalan, buka http://127.0.0.1:8000/api/documentation di browser untuk melihat dokumentasi Swagger.

---

## Akses API melalui Postman

API ini dapat diakses menggunakan Postman, baik secara lokal maupun melalui link yang sudah dideploy:

### Endpoint Base URL
- **Lokal**: `http://127.0.0.1:8000/api/`
- **Deploy**: `https://simple-article-api.up.railway.app/api/`

### Langkah-langkah:

1. **Register User**
   - Method: `POST`
   - URL: `/register`
   - Body (JSON):
     ```json
     {
       "name": "Riana",
       "email": "riana@example.com",
       "password": "secret123",
     }
     ```

2. **Login**
   - Method: `POST`
   - URL: `/login`
   - Body (JSON):
     ```json
     {
       "email": "riana@example.com",
       "password": "secret123"
     }
     ```
   - Response: akan menerima `access_token` (JWT)

3. **Gunakan Token**
   - Tambahkan Header:
     ```
     Authorization: Bearer {access_token}
     ```

4. **Akses Endpoint Lainnya**
   - GET `/articles` (support pagination & search: `?search=keyword&page=1`)
   - POST `/articles` (buat artikel baru)
   - GET by id `/articles/id` (menampilkan detail artikel)
   - PUT `/articles/id` (mengedit artikel)
   - DELETE `/articles/id` (menghapus artikel)
   - GET `/categories` (daftar kategori)
   - POST `/categories` (buat kategori baru)
   - PUT `/categories/id` (mengedit kategori)
   - DELETE `/categories/id` (menghapus kategori)

---

## Login Credential Dummy
```json
{
  "email": "riana@example.com",
  "password": "secret123"
}
