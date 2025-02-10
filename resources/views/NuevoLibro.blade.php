<x-layouts.layout-index title="Nuevo Libro">

    <h2 class="text-3xl font-bold mb-6">Añadir Nuevo Libro</h2>

    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="titulo">
                Título
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="titulo" type="text" placeholder="Título del libro" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="isbn">
                ISBN
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="isbn" type="text" placeholder="ISBN del libro" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="portada">
                URL de la Portada
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="portada" type="url" placeholder="https://ejemplo.com/imagen-portada.jpg" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="anio_publicacion">
                Año de Publicación
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="anio_publicacion" type="number" min="1000" max="2099" step="1" placeholder="Año de publicación" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="autor">
                Autor
            </label>
            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="autor" required>
                <option value="">Seleccione un autor</option>
                <option value="1">Gabriel García Márquez</option>
                <option value="2">Jorge Luis Borges</option>
                <option value="3">Isabel Allende</option>
                <option value="4">Julio Cortázar</option>
            </select>
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="ubicacion">
                Ubicación
            </label>
            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="ubicacion" required>
                <option value="">Seleccione una ubicación</option>
                <option value="1">Biblioteca Central - Estantería A1</option>
                <option value="2">Biblioteca Norte - Estantería B3</option>
                <option value="3">Biblioteca Sur - Estantería C2</option>
            </select>
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Añadir Libro
            </button>
            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                Cancelar
            </a>
        </div>
    </form>
</x-layouts.layout-index>
