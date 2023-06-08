@props([
    'link' => '#',
    'title' => '',
    'color' => 'purple',
])

<a href="{{$link}}" class="border border-{{$color}}-600 text-{{$color}}-600 rounded px-4 d-block text-center py-2  w-full">{{$title}}</a>
