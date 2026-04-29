<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $detail_id = 1;
        for ($i = 1; $i <= 10; $i++) {
            $barangs = array_slice(range(1, 15), ($i - 1) % 13, 3);
            foreach ($barangs as $barang_id) {
                $data[] = [
                    'detail_id'    => $detail_id++,
                    'penjualan_id' => $i,
                    'barang_id'    => $barang_id,
                    'harga'        => rand(3000, 60000),
                    'jumlah'       => rand(1, 5),
                ];
            }
        }
        DB::table('t_penjualan_detail')->insert($data);
    }
}
