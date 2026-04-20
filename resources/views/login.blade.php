<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-md text-center">
        <h1 class="text-2xl font-bold mb-6 text-gray-800">Hệ thống Đăng nhập</h1>

        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4 text-sm">
                {{ session('error') }}
            </div>
        @endif

        <div class="space-y-4">
            <a href="/auth/google" class="flex items-center justify-center gap-2 w-full border border-gray-300 py-2.5 rounded-lg font-medium text-gray-700 hover:bg-gray-50 transition duration-200">
                <img src="https://www.svgrepo.com/show/475656/google-color.svg" loading="lazy" alt="google logo" class="w-5 h-5">
                <span>Tiếp tục với Google</span>
            </a>

            <a href="/auth/facebook" class="flex items-center justify-center gap-2 w-full bg-[#1877F2] py-2.5 rounded-lg font-medium text-white hover:bg-blue-700 transition duration-200">
                <img src="https://www.svgrepo.com/show/475647/facebook-color.svg" loading="lazy" alt="facebook logo" class="w-5 h-5 brightness-0 invert">
                <span>Tiếp tục với Facebook</span>
            </a>
        </div>
    </div>

</body>
</html>