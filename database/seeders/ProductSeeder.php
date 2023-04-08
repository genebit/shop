<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create(
            [
                'user_id' => 2,
                'product_name' => "Green Coat",
                'price' => 1599.00,
                'img' => 'spring.png'
            ]
        );
    }
}
