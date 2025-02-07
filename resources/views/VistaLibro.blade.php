<x-layouts.layout-index title="Gestión de Libros">
    <h2 class="text-3xl font-bold mb-6">Gestión de Libros</h2>

    <!-- Filters and Search Section -->
    <div class="bg-white p-4 rounded-lg shadow mb-6">
        <h3 class="text-lg font-semibold mb-4">Filtros y Búsqueda</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div>
                <label for="titulo" class="block text-sm font-medium text-gray-700 mb-1">Título</label>
                <input type="text" id="titulo" name="titulo" class="w-full p-2 border rounded" placeholder="Buscar por título">
            </div>
            <div>
                <label for="autor" class="block text-sm font-medium text-gray-700 mb-1">Autor</label>
                <input type="text" id="autor" name="autor" class="w-full p-2 border rounded" placeholder="Buscar por autor">
            </div>
            <div>
                <label for="isbn" class="block text-sm font-medium text-gray-700 mb-1">ISBN</label>
                <input type="text" id="isbn" name="isbn" class="w-full p-2 border rounded" placeholder="Buscar por ISBN">
            </div>
            <div class="flex items-end">
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 w-full">Buscar</button>
            </div>
        </div>
    </div>

    <!-- Add New Book Button -->
    <div class="mb-6 flex justify-end">
        <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Añadir Nuevo Libro</button>
    </div>

    <!-- Books Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
        @foreach($libros as $libro)
            <x-carta-libro :src="$libro->portada" :isbn="$libro->isbn" :titulo="$libro->titulo"
                           :anio="$libro->anio_publicacion" :estado="$libro->estado" :autor="$libro->autor->nombre"
                           :ubicacion="$libro->ubicacion->biblioteca"/>
        @endforeach
    </div>

</x-layouts.layout-index>
