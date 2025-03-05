<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevConnect</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js for interactivity -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50 font-sans antialiased">
    <!-- Header -->
    <header class="bg-white/80 backdrop-blur-md shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-indigo-600">DevConnect</div>
            <nav class="flex space-x-4">
            <div class="text-xl font-bold text-indigo-600"></div>
                @if (Route::has('login'))
                    <nav class="flex items-center space-x-4">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="nav-link">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="nav-link">Register</a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-5xl font-bold mb-6 animate-fade-in">Bienvenue sur DevConnect</h1>
            <p class="text-xl mb-8 animate-fade-in delay-100">Le réseau social dédié aux développeurs pour partager, collaborer et innover ensemble.</p>
            <a href="#" class="bg-white text-indigo-600 font-semibold py-3 px-8 rounded-lg shadow-lg hover:bg-gray-100 transition duration-300 animate-fade-in delay-200">Rejoignez-nous</a>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-20">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-6 animate-fade-in">À propos de DevConnect</h2>
            <p class="text-gray-600 max-w-2xl mx-auto animate-fade-in delay-100">Créez un réseau social pour développeurs afin de partager des connaissances techniques, des projets et des opportunités professionnelles.</p>
        </div>
    </section>

    <!-- Features Section -->
    <section class="bg-white py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12 animate-fade-in">Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-gray-50 p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300 animate-fade-in delay-100">
                    <h3 class="text-xl font-semibold mb-4">Profil Utilisateur Enrichi</h3>
                    <p class="text-gray-600">Ajoutez vos compétences, projets, certifications et intégrez votre portfolio GitHub/GitLab.</p>
                </div>
                <!-- Feature 2 -->
                <div class="bg-gray-50 p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300 animate-fade-in delay-200">
                    <h3 class="text-xl font-semibold mb-4">Ajout de Connexions</h3>
                    <p class="text-gray-600">Envoyez, acceptez et gérez vos connexions pour collaborer avec d'autres développeurs.</p>
                </div>
                <!-- Feature 3 -->
                <div class="bg-gray-50 p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300 animate-fade-in delay-300">
                    <h3 class="text-xl font-semibold mb-4">Publications Techniques</h3>
                    <p class="text-gray-600">Partagez articles, snippets de code et tutoriels pour enrichir la communauté.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-6 animate-fade-in">Prêt à rejoindre la communauté des développeurs ?</h2>
            <p class="text-xl mb-8 animate-fade-in delay-100">Créez votre profil et commencez à partager vos connaissances dès aujourd'hui !</p>
            <a href="#" class="bg-white text-indigo-600 font-semibold py-3 px-8 rounded-lg shadow-lg hover:bg-gray-100 transition duration-300 animate-fade-in delay-200">Créer un compte</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-10">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2025 DevConnect. Tous droits réservés.</p>
        </div>
    </footer>

    <!-- JavaScript for Animations -->
    <script>
        // Add fade-in animation to elements with the `animate-fade-in` class
        document.addEventListener('DOMContentLoaded', () => {
            const animateElements = document.querySelectorAll('.animate-fade-in');
            animateElements.forEach((el, index) => {
                setTimeout(() => {
                    el.classList.add('opacity-100', 'translate-y-0');
                }, index * 200); // Delay each element by 200ms
            });
        });
    </script>

    <!-- Tailwind Animation Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-out forwards',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: 0, transform: 'translateY(20px)' },
                            '100%': { opacity: 1, transform: 'translateY(0)' },
                        },
                    },
                },
            },
        };
    </script>
</body>
</html>