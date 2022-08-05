# projek_laravel
Projek Laravel

# Cara menjalankan projek

1. clone repo mengunakan git clone
2. masuk ke project directory menggunakan cd
3. install vendor/depedecy => composer install
4. jalankan migrasi tabel => php artisan migrate
5. jalankan seeder => php artisan db:seed --class=PendudukSeeder
6. update file .env , sesuaikan nama database yang digunakan 
7. jalankan php artisan serve
8. akses view di -> http://127.0.0.1:8000/penduduk