# ✅ Checklist Deployment IDCloudHost

## 📦 Persiapan File (Lokal)

- [ ] Jalankan: `composer install --optimize-autoloader --no-dev`
- [ ] Jalankan: `php artisan config:cache`
- [ ] Jalankan: `php artisan route:cache`
- [ ] Jalankan: `php artisan view:cache`
- [ ] Hapus file `.env` (jangan upload ke server)
- [ ] Pastikan semua file di folder `public/images/` sudah ada

## 🗄️ Setup Database (cPanel)

- [ ] Buat database baru: `apindo_musprov`
- [ ] Buat user database baru
- [ ] Berikan semua privileges ke user
- [ ] Catat: Database name, username, password, host

## 📤 Upload ke Server

- [ ] Upload semua file ke `public_html/` (atau folder domain)
- [ ] Pastikan struktur folder benar
- [ ] Upload file gambar: `Backdroop.jpg`, `BJH.png`, `MBH.png`, `logokartu.png`, `logokartuapindo.png`

## ⚙️ Konfigurasi Server

- [ ] Buat file `.env` di root folder
- [ ] Isi konfigurasi database di `.env`
- [ ] Set `APP_ENV=production`
- [ ] Set `APP_DEBUG=false`
- [ ] Set `APP_URL=https://yourdomain.com`
- [ ] Jalankan: `php artisan key:generate`
- [ ] Jalankan: `composer install --no-dev`
- [ ] Jalankan: `php artisan migrate --force`
- [ ] Jalankan: `php artisan storage:link`
- [ ] Set permissions: `chmod -R 775 storage bootstrap/cache`

## 🧪 Testing

- [ ] Buka website di browser
- [ ] Test semua section (Home, Schedule, Venue, Pendaftaran)
- [ ] Test form pendaftaran
- [ ] Test upload file surat mandat
- [ ] Cek file tersimpan di `storage/app/public/surat_mandat/`
- [ ] Cek data masuk ke database

## 🔒 Keamanan

- [ ] Setup SSL certificate (HTTPS)
- [ ] Pastikan `APP_DEBUG=false`
- [ ] Cek file `.htaccess` sudah ada
- [ ] Setup backup database otomatis

## 📝 Catatan Penting

**URL File Upload:**
- File akan tersimpan di: `storage/app/public/surat_mandat/`
- Dapat diakses via: `https://yourdomain.com/storage/surat_mandat/[nama-file]`

**Database:**
- Pastikan backup database secara berkala
- Simpan kredensial database dengan aman

**Email:**
- Konfigurasi SMTP di `.env` jika ingin kirim email notifikasi

---

**Status:** ⏳ Siap untuk deploy

