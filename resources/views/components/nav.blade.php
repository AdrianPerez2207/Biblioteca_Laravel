

<nav>
    <ul class="flex space-x-4">
        <x-nav-link url="{{route('libros.index')}}" :isActive="request()->is('/')">Libros</x-nav-link>
        <x-nav-link url="{{route('autores.index')}}" :isActive="request()->is('autores')">Autores</x-nav-link>
        <x-nav-link url="{{route('ubicaciones.index')}}" :isActive="request()->is('ubicaciones')">Ubicaciones</x-nav-link>
        <x-nav-link url="#" :isActive="request()->is('')">Reporte Biblioteca</x-nav-link>
    </ul>
</nav>
