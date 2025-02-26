<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('category')->insert([ 
        [
            'nama' => 'Alat tulis kantor'
        ],
        [
            'nama' => 'Kertas dan cover'
        ],
        [
            'nama' => 'Bahan cetak'
        ],
        [
            'nama' => 'Benda pos'
        ],
        [
            'nama' => 'Persediaan dokumen'
        ],
        [
            'nama' => 'Alat listrik'
        ],

    ]);
        DB::table('barang')->insert([
            [
                'nusp' => '01.01.07.01.03.01.01.53',
                'nama_barang' => 'Stiky note warna',
                'category_id' => 1,
                'jumlah' => 5,
                'satuan' => 'Buah',
                'stok' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ]);
    
    }
}
