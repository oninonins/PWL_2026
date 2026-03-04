<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        $detail_id = 1;
        for ($i = 1; $i <= 10; $i++) { // 10 Transaksi
            for ($j = 1; $j <= 3; $j++) { // 3 Barang per transaksi
                $data[] = [
                    'detail_id' => $detail_id++,
                    'penjualan_id' => $i,
                    'barang_id' => ($i + $j) % 15 + 1, // Barang random
                    'harga' => 15000,
                    'jumlah' => 2,
                ];
            }
        }
        DB::table('t_penjualan_detail')->insert($data);
    }
}