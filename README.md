# Nero Gaming Shop Admin Panel — Laravel MVC

Project ini adalah versi admin panel Laravel untuk UTS Pemrograman Web 2026 dengan tema website pengelolaan produk top up game/app lainnya
<img width="1919" height="926" alt="image" src="https://github.com/user-attachments/assets/a3b929c8-401f-4945-a658-df0186cebfc2" />
<img width="1919" height="928" alt="image" src="https://github.com/user-attachments/assets/80241bbd-bc22-415f-96ca-6a9b0c51d922" />
<img width="1919" height="929" alt="image" src="https://github.com/user-attachments/assets/d3050e05-8c1b-4b30-b107-befd93b201c0" />
<img width="1919" height="930" alt="image" src="https://github.com/user-attachments/assets/056130a8-f9cd-40b2-9bdb-c5c8b6910dac" />


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
