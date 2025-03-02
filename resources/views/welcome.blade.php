<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DevConnect</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* Fallback Tailwind CSS */
            /* Add your fallback styles here if needed */
        </style>
    @endif
    <!-- Custom CSS for Animations -->
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes gradientBackground {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
        @keyframes floating {
            0% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
            100% {
                transform: translateY(0);
            }
        }
        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out;
        }
        .gradient-black {
            background: linear-gradient(135deg, #1a1a1a, #000000);
        }
        .gradient-text {
            background: linear-gradient(135deg, #1a1a1a, #000000);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .gradient-border {
            border: 2px solid transparent;
            background: linear-gradient(white, white) padding-box,
                        linear-gradient(135deg, #1a1a1a, #000000) border-box;
        }
        .animated-background {
            background: linear-gradient(-45deg, #ffffff, #f0f0f0, #e0e0e0, #ffffff);
            background-size: 400% 400%;
            animation: gradientBackground 10s ease infinite;
        }
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        .card-hover {
            transition: box-shadow 0.3s ease-in-out, transform 0.3s ease-in-out;
        }
        .card-hover:hover {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            transform: translateY(-5px);
        }
    </style>
</head>
<body class="font-sans antialiased bg-white text-gray-900">
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-xl font-semibold gradient-text">DevConnect</div>
            <nav class="flex items-center space-x-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}" class="text-gray-700 hover:text-gray-900 transition duration-150 ease-in-out">
                            
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-700 hover:text-gray-900 transition duration-150 ease-in-out">
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-gray-700 hover:text-gray-900 transition duration-150 ease-in-out">
                                Register
                            </a>
                        @endif
                    @endauth
                @endif
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="animated-background py-32 relative overflow-hidden">
        <div class="container mx-auto px-6 text-center animate-fadeInUp">
            <h1 class="text-6xl font-bold mb-6 gradient-text floating">Bienvenue sur DevConnect</h1>
            <p class="text-xl mb-8 max-w-2xl mx-auto text-gray-700">
                Le réseau social dédié aux développeurs pour partager, collaborer et innover ensemble.
            </p>
            <a href="#" class="inline-block gradient-black text-white font-semibold py-3 px-8 rounded-lg shadow-lg hover:opacity-90 transition duration-150 ease-in-out hover-scale">
                Rejoignez-nous
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6 text-center animate-fadeInUp">
            <h2 class="text-4xl font-semibold mb-6 gradient-text">À propos de DevConnect</h2>
            <p class="text-gray-700 max-w-2xl mx-auto">
                Créez un réseau social pour développeurs afin de partager des connaissances techniques, des projets et des opportunités professionnelles.
            </p>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature Cards -->
                <div class="gradient-border p-8 rounded-lg shadow-md hover:shadow-lg transition duration-150 ease-in-out card-hover">
                    <h4 class="text-2xl font-semibold mb-4 gradient-text">Profil Utilisateur Enrichi</h4>
                    <p class="text-gray-700">Ajoutez vos compétences, projets, certifications et intégrez votre portfolio GitHub/GitLab.</p>
                </div>
                <div class="gradient-border p-8 rounded-lg shadow-md hover:shadow-lg transition duration-150 ease-in-out card-hover">
                    <h4 class="text-2xl font-semibold mb-4 gradient-text">Ajout de Connexions</h4>
                    <p class="text-gray-700">Envoyez, acceptez et gérez vos connexions pour collaborer avec d'autres développeurs.</p>
                </div>
                <div class="gradient-border p-8 rounded-lg shadow-md hover:shadow-lg transition duration-150 ease-in-out card-hover">
                    <h4 class="text-2xl font-semibold mb-4 gradient-text">Publications Techniques</h4>
                    <p class="text-gray-700">Partagez articles, snippets de code et tutoriels pour enrichir la communauté.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="gradient-black text-white py-32 relative overflow-hidden">
        <div class="container mx-auto px-6 text-center animate-fadeInUp">
            <h2 class="text-4xl font-semibold mb-6 floating">Prêt à rejoindre la communauté des développeurs ?</h2>
            <p class="text-xl mb-8">Créez votre profil et commencez à partager vos connaissances dès aujourd'hui !</p>
            <a href="#" class="inline-block bg-white text-gray-900 font-semibold py-3 px-8 rounded-lg shadow-lg hover:bg-gray-100 transition duration-150 ease-in-out hover-scale">
                Créer un compte
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="gradient-black text-white py-6">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2025 DevConnect. Tous droits réservés.</p>
        </div>
    </footer>
</body>
</html>