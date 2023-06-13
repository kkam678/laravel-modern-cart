@props([
    'link' => '#',
    'title' => '',
    'color' => 'purple',
])

<a href="{{$link}}" class="border text-black dark:text-white rounded px-4 d-block text-center py-2  w-full">{{$title}}</a>
