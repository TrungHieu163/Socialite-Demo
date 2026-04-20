<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center">
    <main class="px-4 w-full">
        <div class="max-w-md mx-auto bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-blue-500 to-indigo-600 h-24"></div>
            
            <div class="relative px-6 pb-8">
                <div class="flex flex-col items-center -mt-12">
                    <img class="w-24 h-24 object-cover rounded-full border-4 border-white shadow-md bg-gray-200" 
                         src="{{ auth()->user()->avatar ?? 'https://via.placeholder.com/150' }}" 
                         alt="Avatar">
                    
                    <h2 class="mt-4 text-xl font-bold text-gray-800">Xin chào, {{ auth()->user()->name }}</h2>
                </div>

                <div class="mt-8 space-y-4">
                    <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                        <span class="text-gray-500 w-24 text-sm font-medium">Email:</span>
                        <span class="text-gray-800 font-semibold text-sm sm:text-base">{{ auth()->user()->email }}</span>
                    </div>

                    <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                        <span class="text-gray-500 w-24 text-sm font-medium">MSSV:</span>
                        <span class="text-gray-800 font-semibold">{{ auth()->user()->student_id }}</span>
                    </div>
                </div>
                
                <div class="mt-8">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full bg-red-500 text-white py-2.5 rounded-xl font-bold shadow-lg shadow-red-200 hover:bg-red-600 active:scale-[0.98] transition-all duration-200">
                            ĐĂNG XUẤT
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>