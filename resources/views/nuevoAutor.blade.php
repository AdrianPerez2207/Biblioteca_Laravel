<x-layouts.layout-index title="Nuevo Autor">
    <h2 class="text-3xl font-bold mb-6">Añadir Nuevo Autor</h2>

    <form method="post" action="{{route('autores.store')}}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">
                Nombre
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="nombre" type="text" placeholder="Nombre del autor" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="nacionalidad">
                Nacionalidad
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="nacionalidad" type="text" placeholder="Nacionalidad del autor" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="fecha_nacimiento">
                Fecha de Nacimiento
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="fecha_nacimiento" type="date" required>
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="biografia">
                Biografía
            </label>
            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="biografia" rows="5" placeholder="Breve biografía del autor" required></textarea>
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Añadir Autor
            </button>
            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{route('autores.index')}}">
                Cancelar
            </a>
        </div>
    </form>
</x-layouts.layout-index>
