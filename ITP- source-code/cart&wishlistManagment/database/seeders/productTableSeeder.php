<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class productTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product{[
        'imagePath' => 'https://cdn.shopify.com/s/files/1/2485/3750/products/clothkits-swing-frock-echino-landscape-web_6215198d-88ce-4cf5-ad2a-03413b79cbb8_510x.progressive.jpg?v=1590055341',
            'title' => 'G-Frock',
            'price' => 1600 ,

        ]};
        $product->save();
        // \App\Models\User::factory(10)->create();


        $product = new \App\Product{[
            'imagePath' => 'https://cdn.shopify.com/s/files/1/2485/3750/products/clothkits-swing-frock-echino-landscape-web_6215198d-88ce-4cf5-ad2a-03413b79cbb8_510x.progressive.jpg?v=1590055341',
            'title' => 'G-Frock',
            'price' => 1600 ,

        ]};
        $product->save();
        // \App\Models\User::factory(10)->create();


        $product = new \App\Product{[
            'imagePath' => 'https://cdn.shopify.com/s/files/1/2485/3750/products/clothkits-swing-frock-echino-landscape-web_6215198d-88ce-4cf5-ad2a-03413b79cbb8_510x.progressive.jpg?v=1590055341',
            'title' => 'G-Frock',
            'price' => 1600 ,

        ]};
        $product->save();
        // \App\Models\User::factory(10)->create();


        $product = new \App\Product{[
            'imagePath' => 'https://cdn.shopify.com/s/files/1/2485/3750/products/clothkits-swing-frock-echino-landscape-web_6215198d-88ce-4cf5-ad2a-03413b79cbb8_510x.progressive.jpg?v=1590055341',
            'title' => 'G-Frock',
            'price' => 1600 ,

        ]};
        $product->save();
        // \App\Models\User::factory(10)->create();


        $product = new \App\Product{[
            'imagePath' => 'https://cdn.shopify.com/s/files/1/2485/3750/products/clothkits-swing-frock-echino-landscape-web_6215198d-88ce-4cf5-ad2a-03413b79cbb8_510x.progressive.jpg?v=1590055341',
            'title' => 'G-Frock',
            'price' => 1600 ,

        ]};
        $product->save();
        // \App\Models\User::factory(10)->create();

    }
}
