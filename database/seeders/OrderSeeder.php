<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['invoice' => '001', 'customer_id' => 1, 'user_id' => 1, 'status' => 1],
            ['invoice' => '002', 'customer_id' => 2, 'user_id' => 1, 'status' => 1],
        ];        
        Order::insert($data);
    }
}
