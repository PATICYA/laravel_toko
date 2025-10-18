<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BarangTokoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('barang_toko')->insert([
            [
                'nama_barang' => 'Celana Jeans',
                'kategori' => 'Fashion',
                'harga' => 200000,
                'stok' => 25,
                'keterangan' => 'Celana jeans pria model slim fit',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_barang' => 'Jaket Kulit',
                'kategori' => 'Fashion',
                'harga' => 450000,
                'stok' => 10,
                'keterangan' => 'Jaket kulit sintetis berkualitas tinggi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_barang' => 'Jam Tangan Sport',
                'kategori' => 'Aksesoris',
                'harga' => 300000,
                'stok' => 18,
                'keterangan' => 'Anti air, tali karet, cocok untuk olahraga',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
