<x-app-layout>
    <x-slot name="menu">
        <x-menu/>
    </x-slot>
    <x-slot name="banner">
        <x-slide.banner></x-slide.banner>
    </x-slot>
    <div class="py-12 flex flex-wrap gap-32 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <h2 class="text-center text-3xl font-bold pb-8 dark:text-white">{{__('nav.recommendProduct')}}</h2>
            <div class="grid grid-cols-4 gap-8">
                @foreach($items as $index => $item)
                <x-shop.item :data="$item"/>
                @endforeach
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="text-center text-3xl font-bold pb-8 dark:text-white">{{__('nav.popularityProduct')}}</h2>
            <div class="grid grid-cols-4 gap-8">
                @foreach($items as $index => $item)
                    <x-shop.item :data="$item"/>
                @endforeach
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="text-center text-3xl font-bold pb-8 dark:text-white">{{__('nav.newProduct')}}</h2>
            <div class="grid grid-cols-4 gap-8">
                @foreach($items as $index => $item)
                    <x-shop.item :data="$item"/>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
