# Project: Laravel Social Login (Google & Facebook)

**Họ tên:** Nguyễn Trung Hiếu  
**Mã sinh viên:** 23810310387  
**Lớp:** D18CNPM2

## Cách cài đặt
1. Clone source code từ GitHub.
2. Chạy `composer install`.
3. Copy `.env.example` sang `.env` và cấu hình Database.
4. Cấu hình Client ID và Secret của Google/Facebook trong `.env`.
5. Chạy `php artisan migrate`.
6. Chạy `php artisan serve`.

## Cấu hình OAuth
- **Google:** Tạo dự án tại Google Cloud Console, thêm URI điều hướng là `/auth/google/callback`.
- **Facebook:** Tạo ứng dụng tại Facebook Developers, thêm sản phẩm "Facebook Login".