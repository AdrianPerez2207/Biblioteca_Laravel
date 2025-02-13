<x-layouts.layout-index title="Nueva Ubicación">

    <h2 class="text-3xl font-bold mb-6">Añadir Nueva Ubicación</h2>

    <form method="post" action="{{route('ubicaciones.store')}}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="biblioteca">
                Biblioteca
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="biblioteca" type="text" placeholder="Nombre de la biblioteca" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="direccion">
                Dirección
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="direccion" type="text" placeholder="Dirección de la biblioteca" required>
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="numero_estanteria">
                Número de Estantería
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="numero_estanteria" type="text" placeholder="Ej: 1, 2, 3..." required>
        </div>
        <div class="flex items-center justify-between">
            <button  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Añadir Ubicación
            </button>
            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                Cancelar
            </a>
        </div>
    </form>
</x-layouts.layout-index>
