<div class="flex w-full h-full flex-wrap">
    <button type="button"
            class="flex gap-4 font-semibold text-xl leading-tight px-8 bg-purple-900 text-white h-full items-center peer">
        <i class="fa-solid fa-bars"></i>
        {{ __('nav.allCategory') }}
    </button>
    <a href="#"
       class="flex gap-4 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight px-8 h-full items-center ">
        랭킹
    </a>
    <a href="#"
       class="flex gap-4 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight px-8 h-full items-center ">
        신상품
    </a>
    <a href="#"
       class="flex gap-4 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight px-8 h-full items-center ">
        파워딜
    </a>
    <a href="#"
       class="flex gap-4 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight px-8 h-full items-center ">
        이벤트
    </a>
    <div class="depth-menu depth-menu-1 z-50 absolute h-fit top-16 left-0 right-0 w-full bg-purple-900 text-white hidden peer-hover:block hover:block">
        <ul class="flex w-full h-full px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
            <li>
                <a href="#" class="peer px-4 py-8 h-full block">브랜드패션</a>
                <div class="depth-menu depth-menu-2 z-50 absolute h-fit top-20 left-0 right-0 w-full bg-purple-800 text-white dark:bg-purple-950 hidden peer-hover:block hover:block">
                    <ul class="flex w-full h-full px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
                        <li class="px-4 py-4">
                            <a href="#">남성의류</a>
                        </li>
                        <li class="px-4 py-4">
                            <a href="#">여성의류</a>
                        </li>
                        <li class="px-4 py-4">
                            <a href="#">잡화</a>
                        </li>
                        <li class="px-4 py-4">
                            <a href="#">쥬얼리/시계</a>
                        </li>
                        <li class="px-4 py-4">
                            <a href="#">아웃도어</a>
                        </li>
                        <li class="px-4 py-4">
                            <a href="#">스포츠패션</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a class="peer px-4 py-8 block" href="#">패션의류 · 잡화 · 뷰티</a>
            </li>
            <li>
                <a class="peer px-4 py-8 block" href="#">유아동</a>
            </li>
            <li>
                <a class="peer px-4 py-8 block" href="#">스포츠 · 건강</a>
            </li>
            <li>
                <a class="peer px-4 py-8 block" href="#">자동차 · 공구</a>
            </li>
            <li>
                <a class="peer px-4 py-8 block" href="#">여행 · 도서</a>
            </li>
        </ul>
    </div>

</div>

