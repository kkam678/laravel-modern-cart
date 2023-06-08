<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="hidden lg:flex justify-end h-8 text-xs gap-4 pt-2">
            <a href="#" class="flex items-center dark:text-white">{{__('nav.logout')}}</a>
            <a href="#" class="flex items-center dark:text-white">{{__('nav.modifyUser')}}</a>
            <a href="#" class="flex items-center dark:text-white">{{__('nav.orderHistory')}}</a>
            <a href="#" class="flex items-center dark:text-white">{{__('nav.customerCenter')}}</a>
        </div>
        <div class="flex justify-between h-20 lg:h-32">
            <div class="flex gap-4 justify-content: center;">
                <!-- Logo -->
                <div class="basis-3/12 lg:basis-2/12 shrink-0 flex items-center">
                    <a class="flex items-center" href="{{ route('index') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200"/>
                    </a>
                </div>
                <div class="basis-7/12 lg:basis-8/12 shrink-0 flex items-center ">
                    <div class="w-full lg:px-40">
                        <div class="form-group relative">
                            <x-text-input id="name" :placeholder="__('nav.searchProduct')"
                                          class="block mt-1 w-full border-purple-900 text-sm lg:text-xl" type="text" name="name"
                                          :value="old('name')" required autofocus autocomplete="name"/>
                            <button class="absolute top-2 right-4 dark:text-white" type="button"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>
                </div>
                <div class="basis-1/12 shrink-0 flex items-center gap-8 text-md lg:text-xl text-black dark:text-white justify-center lg:justify-start">
                    <a class="hidden lg:flex" href="{{ route('index') }}">
                        <i class="fa-solid fa-ticket"></i>
                    </a>
                    <a class="hidden lg:flex" href="{{ route('index') }}">
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <a class="" href="{{ route('index') }}">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
<header class="bg-white dark:bg-gray-800 shadow relative overflow-visible">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 items-center hidden lg:flex">
        <x-menu/>
    </div>
</header>
