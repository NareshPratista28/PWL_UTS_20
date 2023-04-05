<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'kode_barang' => '01',
                'nama_barang' => 'Indomie 20',
                'kategori_barang' => 'Makanan',
                'harga' => '3000',
                'qty' => '100'
            ],
            [
                'kode_barang' => '02',
                'nama_barang' => 'Pocari Sweat',
                'kategori_barang' => 'Minuman',
                'harga' => '6000',
                'qty' => '50'
            ],
            [
                'kode_barang' => '03',
                'nama_barang' => 'Piatos',
                'kategori_barang' => 'Snack',
                'harga' => '5000',
                'qty' => '45'
            ],
            [
                'kode_barang' => '04',
                'nama_barang' => 'Pisang',
                'kategori_barang' => 'Buah',
                'harga' => '15000',
                'qty' => '45'
            ],
            [
                'kode_barang' => '05',
                'nama_barang' => 'Mangga',
                'kategori_barang' => 'Buah',
                'harga' => '12000',
                'qty' => '45'
            ],
            [
                'kode_barang' => '06',
                'nama_barang' => 'Apel',
                'kategori_barang' => 'Buah',
                'harga' => '9000',
                'qty' => '45'
            ],
            [
                'kode_barang' => '07',
                'nama_barang' => 'Doritos',
                'kategori_barang' => 'Snack',
                'harga' => '5000',
                'qty' => '45'
            ],
            [
                'kode_barang' => '08',
                'nama_barang' => 'Sukro',
                'kategori_barang' => 'Snack',
                'harga' => '5000',
                'qty' => '45'
            ],
            [
                'kode_barang' => '09',
                'nama_barang' => 'Happy Tos',
                'kategori_barang' => 'Snack',
                'harga' => '5000',
                'qty' => '45'
            ],
            [
                'kode_barang' => '10',
                'nama_barang' => 'Chitato',
                'kategori_barang' => 'Snack',
                'harga' => '5000',
                'qty' => '45'
            ],
            [
                'kode_barang' => '11',
                'nama_barang' => 'Mie Sedap',
                'kategori_barang' => 'Makanan',
                'harga' => '3000',
                'qty' => '100'
            ],
            [
                'kode_barang' => '12',
                'nama_barang' => 'Dancow',
                'kategori_barang' => 'Minuman',
                'harga' => '6000',
                'qty' => '50'
            ],
            [
                'kode_barang' => '13',
                'nama_barang' => 'Pir',
                'kategori_barang' => 'Snack',
                'harga' => '5000',
                'qty' => '45'
            ],
            [
                'kode_barang' => '14',
                'nama_barang' => 'Naga',
                'kategori_barang' => 'Buah',
                'harga' => '15000',
                'qty' => '45'
            ],
            [
                'kode_barang' => '15',
                'nama_barang' => 'Alpukat',
                'kategori_barang' => 'Buah',
                'harga' => '12000',
                'qty' => '45'
            ],
            [
                'kode_barang' => '16',
                'nama_barang' => 'Jeruk',
                'kategori_barang' => 'Buah',
                'harga' => '9000',
                'qty' => '45'
            ],
            [
                'kode_barang' => '17',
                'nama_barang' => 'Kukubama',
                'kategori_barang' => 'Minuman',
                'harga' => '5000',
                'qty' => '45'
            ],
            [
                'kode_barang' => '18',
                'nama_barang' => 'Teh jus',
                'kategori_barang' => 'Minuman',
                'harga' => '5000',
                'qty' => '45'
            ],
            [
                'kode_barang' => '19',
                'nama_barang' => 'Sprite',
                'kategori_barang' => 'Minuman',
                'harga' => '5000',
                'qty' => '45'
            ],
            [
                'kode_barang' => '20',
                'nama_barang' => 'Fanta',
                'kategori_barang' => 'Minuman',
                'harga' => '5000',
                'qty' => '45'
            ],
        ];

        DB::table('barang')->insert($data);
    }
}
