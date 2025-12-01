# 📋 Panduan Deployment ke IDCloudHost

## 🎯 Persiapan Sebelum Deploy

### 1. **Optimasi untuk Production**

```bash
# Optimasi autoloader
composer install --optimize-autoloader --no-dev

# Cache config
php artisan config:cache

# Cache routes
php artisan route:cache

# Cache views
php artisan view:cache
```

### 2. **File yang Perlu Diperhatikan**

✅ **File yang HARUS di-upload:**
- Semua file di folder `app/`
- Semua file di folder `config/`
- Semua file di folder `database/`
- Semua file di folder `public/`
- Semua file di folder `resources/`
- Semua file di folder `routes/`
- File `artisan`
- File `composer.json` dan `composer.lock`
- File `.htaccess` (jika ada)

❌ **File yang TIDAK perlu di-upload:**
- Folder `vendor/` (akan diinstall di server)
- Folder `node_modules/` (jika ada)
- File `.env` (buat baru di server)
- Folder `storage/logs/` (buat manual di server)
- Folder `.git/`

---

## 🔧 Konfigurasi di IDCloudHost

### 1. **Setup Database di cPanel**

1. Login ke **cPanel IDCloudHost**
2. Buka **MySQL Databases**
3. Buat database baru: `apindo_musprov`
4. Buat user database baru
5. Berikan semua privileges ke user
6. Catat informasi:
   - Database name: `username_apindo_musprov`
   - Database user: `username_dbuser`
   - Database password: `[password yang dibuat]`
   - Database host: `localhost` (biasanya)

### 2. **Upload File ke Server**

**Metode 1: Via File Manager cPanel**
1. Login cPanel → **File Manager**
2. Masuk ke folder `public_html` (atau folder domain Anda)
3. Upload semua file Laravel (kecuali yang di .gitignore)
4. Pastikan struktur folder:
   ```
   public_html/
   ├── app/
   ├── config/
   ├── database/
   ├── public/  ← File di sini harus dipindah ke root
   ├── resources/
   ├── routes/
   ├── artisan
   ├── composer.json
   └── .env
   ```

**Metode 2: Via Git (Recommended)**
```bash
# Di server, clone repository
git clone https://github.com/stev-28/apindopb.git
cd apindopb
composer install --optimize-autoloader --no-dev
```

### 3. **Konfigurasi .env untuk Production**

Buat file `.env` di root folder dengan isi:

```env
APP_NAME="MUSPROV APINDO Papua Barat"
APP_ENV=production
APP_KEY=base64:xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
APP_DEBUG=false
APP_URL=https://yourdomain.com

LOG_CHANNEL=stack
LOG_LEVEL=error

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=username_apindo_musprov
DB_USERNAME=username_dbuser
DB_PASSWORD=your_password_here

SESSION_DRIVER=file
SESSION_LIFETIME=120

CACHE_DRIVER=file
FILESYSTEM_DISK=local

MAIL_MAILER=smtp
MAIL_HOST=smtp.idcloudhost.com
MAIL_PORT=587
MAIL_USERNAME=noreply@yourdomain.com
MAIL_PASSWORD=your_email_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@yourdomain.com
MAIL_FROM_NAME="${APP_NAME}"
```

**Generate APP_KEY:**
```bash
php artisan key:generate
```

### 4. **Setup Folder Permissions**

```bash
# Set permissions untuk storage dan cache
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

### 5. **Jalankan Migration**

```bash
php artisan migrate --force
```

### 6. **Buat Storage Link**

```bash
php artisan storage:link
```

---

## 🌐 Konfigurasi Domain & Web Server

### **Opsi 1: Root Domain (domain.com)**

Jika ingin domain langsung ke Laravel:

1. **Pindahkan isi folder `public/` ke root:**
   ```bash
   # Di server
   mv public/* public/.* ../ 2>/dev/null
   mv public/index.php ../index.php
   ```

2. **Edit `index.php` di root:**
   ```php
   // Ubah path dari:
   require __DIR__.'/../vendor/autoload.php';
   $app = require_once __DIR__.'/../bootstrap/app.php';
   
   // Menjadi:
   require __DIR__.'/vendor/autoload.php';
   $app = require_once __DIR__.'/bootstrap/app.php';
   ```

### **Opsi 2: Subdomain (apindo.domain.com)**

1. Buat subdomain di cPanel
2. Point ke folder `public_html/apindo` atau folder khusus
3. Upload semua file Laravel ke folder tersebut
4. Setup seperti root domain

---

## 📝 Checklist Deployment

### **Sebelum Upload:**
- [ ] Optimasi composer (`composer install --no-dev`)
- [ ] Cache config, routes, views
- [ ] Hapus file `.env` dari upload
- [ ] Pastikan `.gitignore` sudah benar

### **Di Server:**
- [ ] Upload semua file ke server
- [ ] Install dependencies: `composer install --no-dev`
- [ ] Buat file `.env` dengan konfigurasi production
- [ ] Generate APP_KEY: `php artisan key:generate`
- [ ] Setup database di cPanel
- [ ] Jalankan migration: `php artisan migrate --force`
- [ ] Buat storage link: `php artisan storage:link`
- [ ] Set permissions: `chmod -R 775 storage bootstrap/cache`
- [ ] Test upload file (surat mandat)
- [ ] Test form pendaftaran

### **Setelah Deploy:**
- [ ] Test semua fitur website
- [ ] Cek upload file berfungsi
- [ ] Cek form pendaftaran
- [ ] Cek email notification (jika ada)
- [ ] Setup SSL certificate (HTTPS)
- [ ] Setup backup otomatis

---

## 🔒 Keamanan

1. **Set APP_DEBUG=false** di `.env`
2. **Gunakan HTTPS** (SSL certificate)
3. **Gunakan password database yang kuat**
4. **Limit akses ke folder storage** via `.htaccess`
5. **Setup firewall** di cPanel

---

## 🐛 Troubleshooting

### Error: "500 Internal Server Error"
- Cek file `.env` sudah benar
- Cek APP_KEY sudah di-generate
- Cek permissions folder storage dan cache
- Cek error log di `storage/logs/laravel.log`

### Error: "Database connection failed"
- Cek kredensial database di `.env`
- Pastikan database sudah dibuat di cPanel
- Cek user database memiliki privileges

### Error: "Storage link not found"
- Jalankan: `php artisan storage:link`
- Pastikan folder `storage/app/public` ada

### File upload tidak berfungsi
- Cek permissions folder `storage/app/public/surat_mandat`
- Cek `php.ini` setting: `upload_max_filesize` dan `post_max_size`
- Cek disk space server

---

## 📞 Support

Jika ada masalah, cek:
1. Error log: `storage/logs/laravel.log`
2. cPanel Error Log
3. PHP Error Log di cPanel

---

**Selamat Deploy! 🚀**

