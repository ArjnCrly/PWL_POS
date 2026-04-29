<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage() {
    $daftar = ["Kopi Kenangan", "Indomie Goreng", "Teh Botol"];
    return view('products.food-beverage', ['items' => $daftar]);
    }

    public function beautyHealth() {
        $daftar = ["Sabun Mandi", "Sampo", "Parfum"];
        return view('products.beauty-health', ['items' => $daftar]);
    }

    public function homeCare() {
        $daftar = ["Pembersih Lantai", "Pembersih Kaca", "Pembersih Dapur"];
        return view('products.home-care', ['items' => $daftar]);
    }
    public function babyKid() {
        $daftar = ["Popok", "Mainan", "Pakaian"];
        return view('products.baby-kid', ['items' => $daftar]);
    }
}
