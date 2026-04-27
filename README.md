# Masdog Gaming Shop Admin Panel — Laravel MVC

Project ini adalah versi admin panel Laravel untuk UTS Pemrograman Web 2026 dengan tema berdasarkan slicing website **Masdog Gaming Shop**.

## Fitur Utama
- Login admin sederhana
- Username diteruskan ke Dashboard dan Profile menggunakan Request Parameter
- Halaman Dashboard admin
- Halaman Pengelolaan Produk dengan data array dinamis dari Controller
- Halaman Profile admin
- Blade Layout, Components, Include partial, dan MVC murni

## Struktur Utama
- `routes/web.php`
- `app/Http/Controllers/PageController.php`
- `resources/views/layouts/app.blade.php`
- `resources/views/login.blade.php`
- `resources/views/dashboard.blade.php`
- `resources/views/pengelolaan.blade.php`
- `resources/views/profile.blade.php`
- `resources/views/components/navbar.blade.php`
- `resources/views/components/footer.blade.php`

## Cara Menjalankan
1. Buat project Laravel baru.
2. Copy semua file dari arsip ini ke folder Laravel sesuai struktur.
3. Jalankan `php artisan serve`.
