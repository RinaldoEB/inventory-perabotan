# Inventory Perabotan

Aplikasi web untuk mengelola data inventory perabotan menggunakan Laravel.

## Tech Stack

- Laravel
- PHP
- MySQL
- Vite
- Node.js

## Requirements

Pastikan sudah install:

- PHP >= 8.x
- Composer
- Node.js & NPM
- MySQL / MariaDB
- Git

## Installation

### 1. Clone Repository

```bash
git clone https://github.com/RinaldoEB/inventory-perabotan.git
```

Masuk ke folder project:

```bash
cd inventory-perabotan
```

### 2. Install Dependency Laravel

```bash
composer install
```

### 3. Install Dependency Frontend

```bash
npm install
```

### 4. Setup Environment

Copy file `.env.example` menjadi `.env`

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

## Database Setup

1. Buka phpMyAdmin / MySQL

2. Buat database baru

Contoh:

```
inventory_perabotan
```

3. Edit file `.env`

Sesuaikan bagian database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=inventory_perabotan
DB_USERNAME=root
DB_PASSWORD=
```

## Migration Database

Jalankan migration:

```bash
php artisan migrate
```

Jika menggunakan seeder:

```bash
php artisan db:seed
```

Atau reset database + isi data dummy:

```bash
php artisan migrate:fresh --seed
```

## Running Project

Jalankan Laravel:

```bash
php artisan serve
```

Jalankan Vite:

```bash
npm run dev
```

Buka di browser:

```
http://127.0.0.1:8000
```

## Notes

- Folder `vendor` tidak disimpan di repository.
- Folder `node_modules` tidak disimpan di repository.
- Jalankan `composer install` dan `npm install` setelah clone.
- File `.env` harus dibuat ulang di setiap device.
