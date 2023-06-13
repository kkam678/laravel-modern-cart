<footer class="pb-16 lg:pb-0">
    <div class="w-full bg-purple-900 text-white h-full text-xs lg:text-xl">
        <div class="max-w-7xl mx-auto flex items-center gap-0 lg:gap-24 h-64 flex-wrap lg:flex-nowrap">
        <div class="w-full lg:basis-9/12 flex flex-wrap text-gray-300 px-4 justify-center lg:justify-start">
            <h2 class="text-center lg:text-left w-40"><x-application-logo-white/></h2>
            <div class="text-center lg:text-left w-full mt-4">{{__('nav.email')}}: kkam678@gmail.com</div>
            <div class="text-center lg:text-left w-full copyright">Copyright© MODERN CART All rights reserved.</div>
            <div class="text-center lg:text-left w-full text-xs text-gray-500">{{__('nav.footerDescription')}}</div>
        </div>
        <div class="w-full lg:basis-3/12">
            <div class="basis-6/12 flex flex-wrap text-gray-300">
                <h2 class="hidden lg:block text-center lg:text-left w-full">{{__('nav.customerCenter')}}</h2>
                <div class="text-center lg:text-left w-full mt-4"><span class="font-bold me-2">TEL</span> 02-0000-0000</div>
                <div class="text-center lg:text-left w-full"><span class="font-bold me-2">FAX</span> 02-0000-0001</div>
                <div class="text-center lg:text-left w-full"><span class="font-bold me-2">E-MAIL</span> cs@moderncart.com</div>
            </div>
        </div>
        </div>
    </div>
    <div class="fixed text-sm lg:hidden bottom-0 left-0 z-40 w-full h-16 bg-white border-t border-gray-200 dark:bg-gray-800 dark:border-gray-600">
        <div class="grid h-full grid-cols-5 mx-auto">
            <button type="button" class="hover:text-purple-500 text-gray-500 dark:text-gray-400 w-full inline-flex flex-col items-center justify-center font-medium hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <i class="fa-solid fa-house"></i>
                <span class="text-xs mt-1">{{__('nav.home')}}</span>
            </button>
            <button type="button" class="hover:text-purple-500 text-gray-500 dark:text-gray-400 w-full inline-flex flex-col items-center justify-center font-medium hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <i class="fa-solid fa-gift"></i>
                <span class="text-xs mt-1">{{__('nav.allProduct')}}</span>
            </button>

            <button type="button" class="hover:text-purple-500 text-gray-500 dark:text-gray-400 w-full inline-flex flex-col items-center justify-center font-medium hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <i class="fa-solid fa-heart"></i>
                <span class="text-xs mt-1">{{__('nav.wish')}}</span>
            </button>

            <button type="button" class="hover:text-purple-500 text-gray-500 dark:text-gray-400 w-full inline-flex flex-col items-center justify-center font-medium hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <i class="fa-solid fa-cart-shopping"></i>
                <span class="text-xs mt-1">{{__('nav.cart')}}</span>
            </button>
            <button type="button" class="hover:text-purple-500 text-gray-500 dark:text-gray-400 w-full inline-flex flex-col items-center justify-center font-medium hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <i class="fa-solid fa-user"></i>
                <span class="text-xs mt-1">{{__('nav.my')}}</span>
            </button>
        </div>
    </div>
</footer>
