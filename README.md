# Web Portal Berita Laravel Tailwind

## Deskripsi
Aplikasi portal berita bernama Awani News adalah aplikasi web untuk menampilkan berita terkini.

## Prasyarat
- PHP >= 8.2
- Composer >= 2.x.x
- Node.js >= 20.xx.x
- NPM => 10.2.3
- PostgreSQL => 14.12
- XAMPP MySQL => 3.3.0 (jika pgadmin trouble)


## Instalasi

### Clone Repository
Clone repository ini ke direktori lokal Anda:

```bash

git clone https://github.com/Wahyunianti/Laravel-Tailwind-News-Talenthub.git

cd project-news

```

### Instal Dependensi
Instal dependensi PHP menggunakan Composer:

```bash
composer install
```

Instal dependensi Node.js menggunakan npm:
```bash
npm install
```

### Konfigurasi Environment
Salin file .env.example ke .env dan sesuaikan konfigurasi environment Anda:

```bash
cp .env.example .env
```

### Konfigurasi Postgresql atau MySQL
pastikan anda telah membuat ```database``` di postgresql atau mysql. Masuk ke file .env dan sesuaikan konfigurasi database Anda:

```bash
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=beritah
DB_USERNAME=
DB_PASSWORD=
```

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=beritah
DB_USERNAME=root
DB_PASSWORD=
```

### Generate Key Laravel
Buat key baru project laravel:
```bash
php artisan key:generate
```

### Migrasi inisial laravel
menjalankan semua migrasi awal project laravel dan seed data user untuk admin:

```bash
php artisan migrate --seed

```


### Build Assets
Build aset menggunakan Vite:

```bash
npm run build
```

### Jalankan Server
Jalankan server pengembangan Laravel::

```bash
php artisan serve
```