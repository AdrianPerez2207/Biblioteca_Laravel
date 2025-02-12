<x-layouts.layout-index title="Gestión de Autores">
    <h2 class="text-3xl font-bold mb-6">Gestión de Autores</h2>

    <!--Sección de búsqueda -->
    <div class="mb-6 flex flex-wrap items-center justify-between gap-4">
        <div class="flex flex-wrap gap-4">
            <input type="text" placeholder="Buscar por nombre" class="p-2 border rounded">
            <input type="text" placeholder="Buscar por nacionalidad" class="p-2 border rounded">
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Buscar</button>
        </div>
        <a href="{{route('autores.create')}}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Añadir Nuevo Autor</a>
    </div>

    <!-- Tabla autores -->
    <div class="overflow-x-auto">
        <table class="w-full bg-white shadow-md rounded">
            <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">Nombre</th>
                <th class="py-3 px-6 text-left">Nacionalidad</th>
                <th class="py-3 px-6 text-left">Fecha de Nacimiento</th>
                <th class="py-3 px-6 text-left">Código Dewey</th>
                <th class="py-3 px-6 text-center">Acciones</th>
            </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
            @foreach ($autores as $autor)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left whitespace-nowrap">{{$autor->nombre}}</td>
                    <td class="py-3 px-6 text-left">{{$autor->nacionalidad}}</td>
                    <td class="py-3 px-6 text-left">{{$autor->fecha_nacimiento}}</td>
                    <td class="py-3 px-6 text-left">{{$autor->codigoDewey}}</td>
                    <td class="py-3 px-6 text-center">
                        <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 mr-2">Editar
                        </button>
                        <!--Le pasamos la ruta y el parámetro a la función destroy-->
                        <a href="{{route('autores.destroy', $autor->id)}}"
                           class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Borrar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-5">
        {{$autores->links()}}
    </div>
</x-layouts.layout-index>
