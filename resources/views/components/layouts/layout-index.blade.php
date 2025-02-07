@props(['title'])

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{$title}}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="flex flex-col min-h-screen bg-gray-100">
        <!-- Header -->
        <header class="bg-blue-600 text-white p-4">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-2xl font-bold">Biblioteca App</h1>
                <x-nav/>
            </div>
        </header>
        <!-- Main Content -->
        <main class="flex-grow container mx-auto my-8 p-4">
            {{ $slot }}
        </main>
        <!-- Footer -->
        <footer class="bg-blue-600 text-white p-4">
            <div class="container mx-auto flex justify-between items-center">
                <p class="text-sm">&copy; 2025 Biblioteca App. Todos los derechos reservados.</p>
                <nav>
                    <ul class="flex space-x-4 text-sm">
                        <li><a href="#" class="hover:underline">Política de Privacidad</a></li>
                        <li><a href="#" class="hover:underline">Términos de Uso</a></li>
                        <li><a href="#" class="hover:underline">Contacto</a></li>
                    </ul>
                </nav>
            </div>
        </footer>
    </body>
</html>
