@props(['url', 'isActive'])

<li><a href="{{$url}}" class="hover:underline {{$isActive? 'font-bold' :''}}">{{ $slot }}</a></li>
