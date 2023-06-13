<x-app-layout>
    <x-slot name="banner">
        <x-slide.banner/>
    </x-slot>
    <div class="py-12 flex flex-wrap gap-16 lg:gap-32 bg-white dark:bg-gray-900 text-xs lg:text-lg">
        <div class="max-w-full mx-auto px-0 xl:max-w-7xl lg:max-w-5xl lg:px-8">
            <h2 class="text-left ms-6 pb-2 lg:ms-0 lg:pb-8 lg:text-center text-xl lg:text-3xl font-bold dark:text-white relative">
                {{__('nav.recommendProduct')}}
                <a href="#" class="absolute top-2 right-4 text-sm text-gray-400 lg:hidden" >{{__('nav.more')}}</a>
            </h2>
            <div class="swiper main-product-slide">
                <div class="swiper-wrapper">
                    @foreach($items as $index => $item)
                        <div class="swiper-slide first:ms-6 lg:first:ms-0">
                            <x-shop.item :data="$item"/>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next text-purple-600 lg:flex hidden"></div>
                <div class="swiper-button-prev text-purple-600 lg:flex hidden"></div>
            </div>
        </div>
        <div class="max-w-full mx-auto px-0 xl:max-w-7xl lg:max-w-5xl lg:px-8">
            <h2 class="text-left ms-6 pb-2 lg:ms-0 lg:pb-8 lg:text-center text-xl lg:text-3xl font-bold dark:text-white relative">
                {{__('nav.popularityProduct')}}
                <a href="#" class="absolute top-2 right-4 text-sm text-gray-400 lg:hidden" >{{__('nav.more')}}</a>
            </h2>
            <div class="swiper main-product-slide">
                <div class="swiper-wrapper">
                    @foreach($items as $index => $item)
                        <div class="swiper-slide first:ms-6 lg:first:ms-0">
                            <x-shop.item :data="$item"/>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-prev text-purple-600 lg:flex hidden"></div>
                <div class="swiper-button-next text-purple-600 lg:flex hidden"></div>
            </div>
            <div class="justify-center align-items-center mt-6 max-w-md mx-auto hidden lg:flex">
                <x-rounded-link link="#" :title="__('nav.more')"/>
            </div>
        </div>
        <div class="max-w-full mx-auto px-0 xl:max-w-7xl lg:max-w-5xl lg:px-8">
            <h2 class="text-left ms-6 pb-2 lg:ms-0 lg:pb-8 lg:text-center text-xl lg:text-3xl font-bold dark:text-white relative">
                {{__('nav.newProduct')}}
                <a href="#" class="absolute top-2 right-4 text-sm text-gray-400 lg:hidden" >{{__('nav.more')}}</a>
            </h2>
            <div class="swiper main-product-slide">
                <div class="swiper-wrapper">
                    @foreach($items as $index => $item)
                        <div class="swiper-slide first:ms-6 lg:first:ms-0">
                            <x-shop.item :data="$item"/>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-prev text-purple-600 lg:flex hidden"></div>
                <div class="swiper-button-next text-purple-600 lg:flex hidden"></div>
            </div>
            <div class="justify-center align-items-center mt-6 max-w-md mx-auto hidden lg:flex">
                <x-rounded-link link="#" :title="__('nav.more')"/>
            </div>
        </div>
    </div>
</x-app-layout>
