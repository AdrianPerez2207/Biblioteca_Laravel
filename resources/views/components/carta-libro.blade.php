@props(['libro'])

<div class="container mx-auto p-4">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden max-w-sm mx-auto">
        <div class="p-4">
            <img class="h-56 w-full object-cover rounded-md" src="" alt="Portada del libro">
            <div class="mt-4">
                <div class="text-xs text-blue-600 font-semibold">ISBN: {{$libro->isbn}}</div>
                <h2 class="mt-1 text-xl font-bold text-gray-900 leading-tight truncate">{{$libro->titulo}}</h2>
                <p class="mt-1 text-sm text-gray-600">Año: {{$libro->anio_publicacion}}</p>
                <div class="mt-2">
                    @if($libro->estado == 'disponible')
                        <span class="px-2 py-1 text-xs font-semibold text-white bg-green-500 rounded-full">
                            {{$libro->estado}}
                        </span>
                    @elseif($libro->estado == 'extraviado')
                        <span class="px-2 py-1 text-xs font-semibold text-white bg-red-500 rounded-full">
                            {{$libro->estado}}
                        </span>
                    @else
                        <span class="px-2 py-1 text-xs font-semibold text-white bg-yellow-500 rounded-full">
                            {{$libro->estado}}
                        </span>
                    @endif

                </div>
                <div class="mt-3 text-sm">
                    <p class="text-gray-700"><span class="font-semibold">Autor:</span> {{$libro->autor->nombre}}</p>
                    <p class="text-gray-700"><span class="font-semibold">Ubicación:</span> {{$libro->ubicacion->biblioteca}}</p>
                </div>
                <div class="mt-4 flex flex-wrap gap-2 items-center justify-center">
                    <a href="{{route('libros.edit', $libro->id)}}" class="bg-blue-500 text-white px-3 py-1 rounded text-sm hover:bg-blue-600">Editar</a>
                    <a href="{{route('libros.prestar', $libro->id)}}" class="bg-yellow-500 text-white px-3 py-1 rounded text-sm hover:bg-yellow-600">Estado</a>
                    <a href="{{route('libros.destroy', $libro->id)}}"  class="bg-red-500 text-white px-3 py-1 rounded text-sm hover:bg-red-600">Eliminar</a>
                </div>
            </div>
        </div>
    </div>
</div>
