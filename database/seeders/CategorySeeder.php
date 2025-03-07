<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Makanan', 'description' => 'Untuk mengenyangkan perut'],
            ['name' => 'Baju', 'description' => 'Untuk hari raya'],
            ['name' => 'Perabotan', 'description' => 'Untuk kebutuhan ibu rumah tangga'],
        ];        
        Category::insert($data);
    }
}
