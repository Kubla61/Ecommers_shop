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
        for($i=0; $i<12; $i++) {
            //Womens
            Product::create([
                'name' => 'Womens '.$i,
                'slug' => 'women- '.$i,
                'details' => 'women\'s hoddie',
                'description' => 'Lorem '. $i . ' ipsum dolor sit amet',
                'product_code' => '-00',
                'price' => rand(999, 9999),
                'quantity' => rand(1, 10),
            ]);

            //Mens
            Product::create([
                'name' => 'Mens '.$i,
                'slug' => 'men- '.$i,
                'details' => 'men\'s hoddie',
                'description' => 'Lorem '. $i . ' ipsum dolor sit amet',
                'product_code' => '-00',
                'price' => rand(999, 9999),
                'quantity' => rand(1, 10),
            ]);

            //Kids
            Product::create([
                'name' => 'Kids '.$i,
                'slug' => 'kids- '.$i,
                'details' => 'kids\'s hoddie',
                'description' => 'Lorem '. $i . ' ipsum dolor sit amet',
                'product_code' => '-00',
                'price' => rand(999, 9999),
                'quantity' => rand(1, 10),
            ]);

            //Homegoods
            Product::create([
                'name' => 'Home Goods '.$i,
                'slug' => 'homegoods- '.$i,
                'details' => 'homegoods',
                'description' => 'Lorem '. $i . ' ipsum dolor sit amet',
                'product_code' => '-00',
                'price' => rand(999, 9999),
                'quantity' => rand(1, 10),
            ]);
        }
    }
}
