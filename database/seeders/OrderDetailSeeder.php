<?php

namespace Database\Seeders;

use App\Models\OrderDetail;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['order_id' => 1, 'product_id' => 1, 'qty' => 1, 'price' => 5000],
            ['order_id' => 1, 'product_id' => 3, 'qty' => 2, 'price' => 3000],
            ['order_id' => 2, 'product_id' => 2, 'qty' => 3, 'price' => 6000],
        ];
        OrderDetail::insert($data);
    }
}
