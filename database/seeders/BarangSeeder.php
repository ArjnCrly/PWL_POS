<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $data = [
            ['barang_id'=>1,'kategori_id'=>1,'barang_kode'=>'BRG001','barang_nama'=>'Beras 5kg','harga_beli'=>55000,'harga_jual'=>62000],
            ['barang_id'=>2,'kategori_id'=>1,'barang_kode'=>'BRG002','barang_nama'=>'Minyak Goreng 1L','harga_beli'=>15000,'harga_jual'=>18000],
            ['barang_id'=>3,'kategori_id'=>3,'barang_kode'=>'BRG003','barang_nama'=>'Keripik Singkong','harga_beli'=>8000,'harga_jual'=>12000],
            ['barang_id'=>4,'kategori_id'=>4,'barang_kode'=>'BRG004','barang_nama'=>'Kecap Manis 250ml','harga_beli'=>9000,'harga_jual'=>13000],
            ['barang_id'=>5,'kategori_id'=>2,'barang_kode'=>'BRG005','barang_nama'=>'Teh Botol 350ml','harga_beli'=>4000,'harga_jual'=>6000],
            ['barang_id'=>6,'kategori_id'=>2,'barang_kode'=>'BRG006','barang_nama'=>'Air Mineral 600ml','harga_beli'=>2500,'harga_jual'=>4000],
            ['barang_id'=>7,'kategori_id'=>3,'barang_kode'=>'BRG007','barang_nama'=>'Biskuit Coklat','harga_beli'=>7000,'harga_jual'=>10000],
            ['barang_id'=>8,'kategori_id'=>1,'barang_kode'=>'BRG008','barang_nama'=>'Mie Instan','harga_beli'=>3000,'harga_jual'=>4500],
            ['barang_id'=>9,'kategori_id'=>4,'barang_kode'=>'BRG009','barang_nama'=>'Garam 250gr','harga_beli'=>3500,'harga_jual'=>5000],
            ['barang_id'=>10,'kategori_id'=>5,'barang_kode'=>'BRG010','barang_nama'=>'Sabun Mandi','harga_beli'=>5000,'harga_jual'=>7500],
            ['barang_id'=>11,'kategori_id'=>5,'barang_kode'=>'BRG011','barang_nama'=>'Deterjen 500gr','harga_beli'=>12000,'harga_jual'=>16000],
            ['barang_id'=>12,'kategori_id'=>2,'barang_kode'=>'BRG012','barang_nama'=>'Kopi Sachet','harga_beli'=>2000,'harga_jual'=>3500],
            ['barang_id'=>13,'kategori_id'=>3,'barang_kode'=>'BRG013','barang_nama'=>'Permen Mint','harga_beli'=>1500,'harga_jual'=>3000],
            ['barang_id'=>14,'kategori_id'=>4,'barang_kode'=>'BRG014','barang_nama'=>'Saus Sambal 140ml','harga_beli'=>8000,'harga_jual'=>11000],
            ['barang_id'=>15,'kategori_id'=>1,'barang_kode'=>'BRG015','barang_nama'=>'Gula Pasir 1kg','harga_beli'=>13000,'harga_jual'=>16000],
        ];
        DB::table('m_barang')->insert($data);
    }
}
