<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="h-screen bg-cover bg-center min-h-screen flex items-center justify-center"
    style="background-image: url({{ asset('/build/assets/bg1.jpg') }})">
        <div class="rounded-3xl p-8 w-full max-w-md relative shadow-xl bg-white bg-center">
            <h2 class="text-3xl text-center font-light text-black mb-8">Sign In</h2>
            <form action="{{ route('login.submit') }}" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label class="block mb-1 text-gray-500 font-medium">Username</label>
                    <input type="text" name="username" placeholder="Masukkan username"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2">
                </div>
                <div>
                    <label class="block mb-1 text-gray-500 font-medium">Password</label>
                    <input type="password" name="password" placeholder="Masukkan password"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2">
                </div>
                <button type="submit"
                    class="w-full bg-blue-500 text-white font-semibold py-3 rounded-lg hover:bg-white hover:text-blue-600 transition">Sign In
                </button>
            </form>
        </div>
    </div>
</body>
</html>
