<x-layouts.layout-index title="Inventario de Libros">
    <h2 class="text-3xl font-bold mb-6">Inventario de Libros</h2>

    <!-- Filtros -->
    <div class="bg-white p-4 rounded-lg shadow mb-6">
        <h3 class="text-lg font-semibold mb-4">Filtros de búsqueda</h3>
        <form id="reportSearch" method="post" action="{{route('libros.reportSearch')}}" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            @csrf
            <div>
                <label for="filtro-titulo" class="block text-sm font-medium text-gray-700 mb-1">Título</label>
                <input type="text" id="filtro-titulo" class="w-full p-2 border rounded" placeholder="Buscar por título" name="titulo">
            </div>
            <div>
                <label for="filtro-autor" class="block text-sm font-medium text-gray-700 mb-1">Autor</label>
                <select id="filtro-autor" class="w-full p-2 border rounded" name="autor_id">
                    <option value="">Todos</option>
                    @foreach($autores as $autor)
                        <option value="{{$autor->id}}">{{$autor->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="filtro-estado" class="block text-sm font-medium text-gray-700 mb-1">Estado</label>
                <select id="filtro-estado" class="w-full p-2 border rounded" name="estado">
                    <option value="">Todos</option>
                    @foreach($estados as $estado)
                        <option value="{{$estado->estado}}">{{$estado->estado}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="filtro-ubicacion" class="block text-sm font-medium text-gray-700 mb-1">Ubicación</label>
                <select id="filtro-ubicacion" class="w-full p-2 border rounded" name="ubicacion_id">
                    <option value="">Todas</option>
                    @foreach($ubicaciones as $ubicacion)
                        <option value="{{$ubicacion->id}}">{{$ubicacion->biblioteca}}</option>
                    @endforeach
                </select>
            </div>
        </form>
        <div class="mt-4 flex justify-end">
            <button form="reportSearch" type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Aplicar Filtros</button>
        </div>
    </div>

    <!-- Tabla de Libros -->
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Título</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Autor</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ISBN</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Estado</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ubicación</th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @foreach($libros as $libro)
                <tr class="hover:bg-gray-100">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">{{$libro->titulo}}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-500">{{$libro->autor->nombre}}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-500">{{$libro->isbn}}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            {{$libro->estado}}
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{$libro->ubicacion->biblioteca}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-5">
        {{$libros->links()}}
    </div>
</x-layouts.layout-index>
