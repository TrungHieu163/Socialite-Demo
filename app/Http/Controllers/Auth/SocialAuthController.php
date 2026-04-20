<?php

namespace App\Http\Controllers\Auth;

use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;

class SocialAuthController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        try {
            // dùng stateless để tránh lỗi session
            $socialUser = Socialite::driver($provider)->stateless()->user();

            // 1. Lấy email 
            $email = $socialUser->email ?? $socialUser->id . '@' . $provider . '.com';

            // 2. Ưu tiên tìm theo email
            $user = User::where('email', $email)->first();

            // 3. Nếu chưa có → tạo mới
            if (!$user) {
                $user = User::create([
                    'name' => $socialUser->name ?? 'No Name',
                    'email' => $email,
                    'password' => null,
                    'avatar' => $socialUser->avatar ?? null,
                    'provider' => $provider,
                    'provider_id' => $socialUser->id,
                    'student_id' => '23810310387'
                ]);
            } 
            // 4. Nếu đã có → update thông tin
            else {
                $user->update([
                    'provider' => $provider,
                    'provider_id' => $socialUser->id,
                    'avatar' => $socialUser->avatar ?? $user->avatar,
                ]);
            }

            Auth::login($user);

            return redirect('/home');

        } catch (Exception $e) {
            return redirect('/login')->with('error', 'Đăng nhập thất bại!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}