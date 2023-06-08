@props([
    'size' => '',
    'title' => '',
    'bgColor' => 'purple',
    'color' => 'white',
])

<button class="bg-{{$bgColor}}-900 rounded px-4 py-2 text-{{$color}} w-full">{{$title}}</button>
