<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;

class MainController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request): View
    {
        $items = [
            [
                'imageUrl' => \Illuminate\Support\Facades\Vite::asset('resources/images/item1.jpeg'),
                'name' => '맛있닭 소스 닭가슴살 스테이크 혼합 150g',
                'price' => 20900,
                'reviewPoint' => 4.9,
                'reviewCount' => 999,
            ],
            [
                'imageUrl' => \Illuminate\Support\Facades\Vite::asset('resources/images/item2.jpeg'),
                'name' => '맛있닭 소스 닭가슴살 스테이크 혼합 150g',
                'price' => 20900,
                'reviewPoint' => 4.9,
                'reviewCount' => 999,
            ],
            [
                'imageUrl' => \Illuminate\Support\Facades\Vite::asset('resources/images/item3.jpeg'),
                'name' => '맛있닭 소스 닭가슴살 스테이크 혼합 150g',
                'price' => 20900,
                'reviewPoint' => 4.9,
                'reviewCount' => 999,
            ],
            [
                'imageUrl' => \Illuminate\Support\Facades\Vite::asset('resources/images/item4.jpeg'),
                'name' => '맛있닭 소스 닭가슴살 스테이크 혼합 150g',
                'price' => 20900,
                'reviewPoint' => 4.9,
                'reviewCount' => 999,
            ],
        ];
        return view('index', ['items' => $items]);
    }
}
