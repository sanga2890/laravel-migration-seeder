<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products_data = [
            [
                'name' => 'Coke',
                'type' => 'drink',
                'price' => 2.50
            ],
            [
                'name' => 'Bucatini',
                'type' => 'pasta',
                'price' => 1.50
            ],
            [
                'name' => 'Fiorentina',
                'type' => 'meat',
                'price' => 39.90
            ]
        ];

        foreach ($products_data as $product) {
            $new_product = new Product();
            $new_product->name = $product['name'];
            $new_product->type = $product['type'];
            $new_product->price = $product['price'];
            $new_product->save();

        }
    }
}
