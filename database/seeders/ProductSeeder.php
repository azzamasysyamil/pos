<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Bakso', 'description' => 'Bakso khas pak haji', 'stock' => 9, 'price' => 10000, 'category_id' => 1],
            ['name' => 'Kemeja', 'description' => 'Kemeja cocok untuk hari raya', 'stock' => 250, 'price' => 150000, 'category_id' => 2],
            ['name' => 'Komik', 'description' => 'Komik diterjemahkan dari Jepang', 'stock' => 10, 'price' => 90000, 'category_id' => 3],
        ];
        Product::insert($data);
    }
}
