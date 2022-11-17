@props(['tags'])

@php
    $mytags = explode(',', $tags)
@endphp

<ul class="flex mt-5">
    @foreach($mytags as $tag)
        <li class="flex items-center justify-center bg-t3 text-white rounded-xl py-1 px-3 mr-2 text-xs">
        <a href="/?tag={{$tag}}">{{$tag}}</a></li>
    @endforeach
</ul>
