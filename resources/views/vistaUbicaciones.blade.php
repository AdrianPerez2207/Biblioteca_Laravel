<x-layouts.layout-index title="Gestión de Ubicaciones">
    <h2 class="text-3xl font-bold mb-6">Gestión de Ubicaciones</h2>

    <!-- Añadir nueva ubicación -->
    <div class="mb-6">
        <a href="{{route('ubicaciones.create')}}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Añadir Nueva Ubicación</a>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Biblioteca</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Dirección</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Número de Estantería</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @foreach($ubicaciones as $ubicacion)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">{{$ubicacion->biblioteca}}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-500">{{$ubicacion->direccion}}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-500">{{$ubicacion->numero_estanteria}}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="{{route('ubicaciones.search', $ubicacion->id)}}" class="text-blue-600 hover:text-blue-900 mr-2">Ver Libros</a>
                        <a href="{{route('ubicaciones.destroy', $ubicacion->id)}}" class="text-red-600 hover:text-red-900">Eliminar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.layout-index>
