# 🚀 Quick Start Deployment IDCloudHost

## ⚡ Langkah Cepat (5 Menit)

### 1. **Optimasi Lokal**
```bash
composer install --optimize-autoloader --no-dev
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### 2. **Upload ke Server**
- Upload semua file ke `public_html/` via File Manager atau FTP
- **JANGAN** upload folder `vendor/` dan file `.env`

### 3. **Setup di Server**
```bash
# Install dependencies
composer install --no-dev --optimize-autoloader

# Buat .env (copy dari .env.example dan edit)
cp .env.example .env

# Generate key
php artisan key:generate

# Setup database
php artisan migrate --force

# Link storage
php artisan storage:link

# Set permissions
chmod -R 775 storage bootstrap/cache
```

### 4. **Konfigurasi .env**
```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com

DB_DATABASE=username_apindo_musprov
DB_USERNAME=username_dbuser
DB_PASSWORD=your_password
```

### 5. **Test**
- Buka website
- Test form pendaftaran
- Test upload file

---

## 📋 File Penting yang Harus Di-upload

✅ **WAJIB:**
- `app/` (semua)
- `config/` (semua)
- `database/` (semua)
- `public/` (semua, termasuk images)
- `resources/` (semua)
- `routes/` (semua)
- `artisan`
- `composer.json`, `composer.lock`
- `.htaccess`

❌ **JANGAN:**
- `vendor/` (install di server)
- `.env` (buat baru di server)
- `storage/logs/` (buat otomatis)
- `.git/`

---

## 🎯 Struktur Folder di Server

```
public_html/
├── app/
├── config/
├── database/
├── public/          ← Isi folder ini harus di root
│   ├── index.php
│   ├── images/
│   └── .htaccess
├── resources/
├── routes/
├── storage/         ← Pastikan writable
├── artisan
├── composer.json
└── .env             ← Buat baru di server
```

---

## ⚠️ Troubleshooting

**Error 500?**
- Cek `.env` sudah benar
- Cek `APP_KEY` sudah di-generate
- Cek permissions: `chmod -R 775 storage bootstrap/cache`

**Database error?**
- Cek kredensial di `.env`
- Pastikan database sudah dibuat di cPanel

**File upload error?**
- Cek permissions folder `storage/app/public/surat_mandat`
- Cek `php.ini`: `upload_max_filesize = 2M`

---

**Butuh bantuan?** Baca `DEPLOYMENT.md` untuk detail lengkap.

