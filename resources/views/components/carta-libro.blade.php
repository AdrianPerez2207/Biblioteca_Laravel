@props(['src', 'isbn', 'titulo', 'anio', 'estado', 'autor', 'ubicacion'])

<div class="container mx-auto p-4">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden max-w-sm mx-auto">
        <div class="p-4">
            <img class="h-56 w-full object-cover rounded-md" src="" alt="Portada del libro">
            <div class="mt-4">
                <div class="text-xs text-blue-600 font-semibold">ISBN: {{$isbn}}</div>
                <h2 class="mt-1 text-xl font-bold text-gray-900 leading-tight">{{$titulo}}</h2>
                <p class="mt-1 text-sm text-gray-600">Año: {{$anio}}</p>
                <div class="mt-2">
                        <span class="px-2 py-1 text-xs font-semibold text-white bg-green-500 rounded-full">
                            {{$estado}}
                        </span>
                </div>
                <div class="mt-3 text-sm">
                    <p class="text-gray-700"><span class="font-semibold">Autor:</span> {{$autor}}</p>
                    <p class="text-gray-700"><span class="font-semibold">Ubicación:</span> {{$ubicacion}}</p>
                </div>
                <div class="mt-4 flex flex-wrap gap-2">
                    <button class="bg-blue-500 text-white px-3 py-1 rounded text-sm hover:bg-blue-600">Editar</button>
                    <button class="bg-yellow-500 text-white px-3 py-1 rounded text-sm hover:bg-yellow-600">Prestar</button>
                    <button class="bg-red-500 text-white px-3 py-1 rounded text-sm hover:bg-red-600">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
</div>
