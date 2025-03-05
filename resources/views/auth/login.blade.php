<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - DevConnect</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js for interactivity -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50 font-sans antialiased">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md mx-4">
            <!-- Session Status -->
            <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="mb-4 text-green-600">
                {{ session('status') }}
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Se connecter</h2>

                <!-- Email Address -->
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300" placeholder="Votre email">
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Mot de passe</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300" placeholder="Votre mot de passe">
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="flex items-center mb-6">
                    <input id="remember_me" type="checkbox" name="remember" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                    <label for="remember_me" class="ml-2 text-sm text-gray-600">Se souvenir de moi</label>
                </div>

                <!-- Login Button and Forgot Password -->
                <div class="flex items-center justify-between">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:underline">Mot de passe oublié?</a>
                    @endif
                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300 shadow-md">
                        Se connecter
                    </button>
                </div>
            </form>

            <!-- Register Link -->
            <div class="mt-8 text-center">
                <p class="text-sm text-gray-600">Pas encore de compte? <a href="{{ route('register') }}" class="text-blue-600 hover:underline">S'inscrire</a></p>
            </div>
        </div>
    </div>
</body>
</html>