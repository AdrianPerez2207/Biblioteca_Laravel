<x-layouts.layout-index title="Gestión de Libros">
    <h2 class="text-3xl font-bold mb-6">Gestión de Libros</h2>

    <!-- Sección filtros de búsqueda -->
    <div class="bg-white p-4 rounded-lg shadow mb-6">
        <h3 class="text-lg font-semibold mb-4">Filtros y Búsqueda</h3>
        <form method="post" action="{{route('libros.search')}}" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            @csrf
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
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 w-full">Buscar</button>
            </div>
        </form>
    </div>

    <!-- Botón para añadir nuevo libro -->
    <div class="mb-6 flex justify-end">
        <a href="{{route('libros.create')}}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Añadir Nuevo Libro</a>
    </div>

    <!-- Libros generados -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
        @foreach($libros as $libro)
            <x-carta-libro :libro="$libro" />
        @endforeach
    </div>
    <div class="mt-5">
        {{$libros->links()}}
    </div>

</x-layouts.layout-index>
