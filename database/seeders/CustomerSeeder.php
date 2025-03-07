<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Indira', 'email' => 'indira@gmail.com', 'address' => 'Bandung', 'phone' => '0808'],
            ['name' => 'Virgi', 'email' => 'virgi@gmail.com', 'address' => 'Bandung', 'phone' => '0808'],
        ];
        Customer::insert($data);
    }
}
