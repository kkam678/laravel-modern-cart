<div class="">
    <a href="#">
    <div class="rounded-lg overflow-hidden">
        <img src="{{ $data['imageUrl'] }}" alt="MODERN CART LOGO"/>
    </div>
    <div class="pt-2">{{$data['name']}}</div>
    <div class="pt-4"><span class="text-purple-900 font-bold text-2xl">{{number_format($data['price'])}}</span>{{__('unit.cash')}}</div>
    </a>
</div>
