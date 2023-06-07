<div class="">
    <a href="#">
        <div class="rounded-lg overflow-hidden">
            <img src="{{ $data['imageUrl'] }}" alt="MODERN CART LOGO"/>
        </div>
        <div class="pt-2 dark:text-white">
            <ul>
                <li>
                    <button type="button" class="p-1 text-sm bg-purple-200 text-purple-900 rounded-md border border-purple-200">{{__('shop.bestBadge')}}</button>
                    <button type="button" class="p-1 text-sm bg-white text-black rounded-md border border-gray-200">{{__('shop.newProductBadge')}}</button>
                    <button type="button" class="p-1 text-sm bg-green-200 text-green-900 rounded-md border border-green-200 ">{{__('shop.powerDealBadge')}}</button>
                    <button type="button" class="p-1 text-sm bg-pink-200 text-pink-900 rounded-md border border-pink-200 ">{{__('shop.mdBadge')}}</button>
                </li>
            </ul>
        </div>
        <div class="pt-2 dark:text-white">
            {{$data['name']}}
        </div>

        <div class="pt-2 dark:text-white">
            <span class="text-lg-left text-2xl pe-2 text-purple-600 dark:text-purple-600 font-bold">80%</span>
            <span class="text-dark dark:text-white font-bold text-xl">{{number_format($data['price'])}}</span> {{__('unit.cash')}}
        </div>

        <div class="pt-1 dark:text-white">
            <i class="fa-solid fa-star text-yellow-400"></i>
            <span class="text-black dark:text-white">4.8</span>
            <span class="text-black dark:text-white">(14,596)</span>
        </div>
    </a>
</div>
