<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index() {
        $totalTransaksi = 50000;
        $tanggal = date('13-20-2024');
    
        return view('sales.index', [
            'total' => $totalTransaksi,
            'tgl' => $tanggal
        ]); 
    }
}
