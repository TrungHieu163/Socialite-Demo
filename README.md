# Social Login Laravel (Google & Facebook)

## Thông tin sinh viên
- Họ tên: Nguyễn Trung Hiếu  
- MSSV: 23810310387  
- Lớp: D18CNPM2

---

## Cài đặt

### 1. Clone project
git clone <https://github.com/TrungHieu163/Socialite-Demo.git> 
<br>cd social-login  

### 2. Cài đặt thư viện
composer install  

### 3. Tạo file môi trường
cp .env.example .env  
php artisan key:generate  

### 4. Cấu hình database (.env)
DB_DATABASE=socialite  
DB_USERNAME=root  
DB_PASSWORD=  

### 5. Chạy migration
php artisan migrate  

### 6. Chạy project
php artisan serve  

---

## Cấu hình OAuth

### Google
- Truy cập Google Cloud Console
- Tạo OAuth Client ID

Redirect URI:
http://localhost:8000/auth/google/callback  

---

### Facebook
- Truy cập Facebook Developers
- Tạo App + Facebook Login

Redirect URI:
http://localhost:8000/auth/facebook/callback  

---

### Thêm vào .env

GOOGLE_CLIENT_ID=xxxx  
GOOGLE_CLIENT_SECRET=xxxx  
GOOGLE_REDIRECT_URI=http://localhost:8000/auth/google/callback  

FACEBOOK_CLIENT_ID=xxxx  
FACEBOOK_CLIENT_SECRET=xxxx  
FACEBOOK_REDIRECT_URI=http://localhost:8000/auth/facebook/callback  

---

