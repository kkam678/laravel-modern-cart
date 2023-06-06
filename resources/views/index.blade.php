<x-app-layout>
    <x-slot name="menu">
        <div class="flex w-full gap-4 h-full">
            <button type="button" class="flex gap-4 font-semibold text-xl leading-tight px-8 bg-purple-900 text-white h-full items-center">
                <i class="fa-solid fa-bars"></i>
                {{ __('nav.category') }}
            </button>
            <a href="#"
               class="flex gap-4 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight px-8 h-full items-center">
                랭킹
            </a>
            <a href="#"
               class="flex gap-4 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight px-8 h-full items-center">
                신상품
            </a>
            <a href="#"
               class="flex gap-4 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight px-8 h-full items-center">
                파워딜
            </a>
            <a href="#"
               class="flex gap-4 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight px-8 h-full items-center">
                이벤트
            </a>
        </div>
    </x-slot>
    <x-slot name="banner">
        <x-slide.banner></x-slide.banner>
    </x-slot>
    <div class="py-12 flex flex-wrap gap-32">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="text-center text-3xl font-bold pb-8">추천 상품</h2>
            <div class="grid grid-cols-4 gap-8">
                @foreach($items as $index => $item)
                <x-shop.item :data="$item"/>
                @endforeach
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="text-center text-3xl font-bold pb-8">인기 상품</h2>
            <div class="grid grid-cols-4 gap-8">
                @foreach($items as $index => $item)
                    <x-shop.item :data="$item"/>
                @endforeach
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="text-center text-3xl font-bold pb-8">신규 상품</h2>
            <div class="grid grid-cols-4 gap-8">
                @foreach($items as $index => $item)
                    <x-shop.item :data="$item"/>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
