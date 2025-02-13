<x-layouts.layout-index title="Editar Libro">

    <h2 class="text-3xl font-bold mb-6">Editar Libro</h2>

    <form method="post" action="{{route('libros.update', $libro->id)}}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="titulo">
                Título
            </label>
            <input value="{{$libro->titulo}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="titulo" type="text" placeholder="Título del libro" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="portada">
                URL de la Portada
            </label>
            <input value="{{$libro->portada}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="portada" type="url" placeholder="https://ejemplo.com/imagen-portada.jpg" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="anio_publicacion">
                Año de Publicación
            </label>
            <input value="{{$libro->anio_publicacion}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="anio_publicacion" type="number" min="1000" max="2099" step="1" placeholder="Año de publicación" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="autor">
                Autor
            </label>
            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="autor_id" required>
                <option value="">Seleccione un autor</option>
                @foreach($autores as $autor)
                    @if($libro->autor->id == $autor->id)
                        <option value="{{$autor->id}}" selected>{{$autor->nombre}}</option>
                    @else
                        <option value="{{$autor->id}}">{{$autor->nombre}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="ubicacion">
                Ubicación
            </label>
            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="ubicacion_id" required>
                <option value="">Seleccione una ubicación</option>
                @foreach($ubicaciones as $ubicacion)
                    @if($libro->ubicacion->id == $ubicacion->id)
                        <option value="{{$ubicacion->id}}" selected>{{$ubicacion->biblioteca}}</option>
                    @else
                        <option value="{{$ubicacion->id}}">{{$ubicacion->biblioteca}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Editar
            </button>
            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                Cancelar
            </a>
        </div>
    </form>
</x-layouts.layout-index>
