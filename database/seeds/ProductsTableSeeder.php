<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\product([
            "product_name" => "Eiken tafel ovaal",
            "product_color" => "bruin",
            "product_materials" => "Eikenhout",
            "product_price" => "440",
            "categories_id" => "1",
        ]);
        $product->save();

        $product = new \App\product([
            "product_name" => "Sanderswoodworks Vlieland Tuinstoel",
            "product_color" => "Licht Bruin",
            "product_materials" => "Steigerhout",
            "product_price" => "99",
            "categories_id" => "2",
        ]);
        $product->save();

        $product = new \App\product([
            "product_name" => "Furnihaus - Hoekbank/Hoeksalon - Granada",
            "product_color" => "Zwart/Grijs",
            "product_materials" => "Stof",
            "product_price" => "799",
            "categories_id" => "3",
        ]);
        $product->save();

        $product = new \App\product([
            "product_name" => "Elektrisch Verstelbaar Zit Sta Bureau",
            "product_color" => "Zwart",
            "product_materials" => "Metaal",
            "product_price" => "449",
            "categories_id" => "4",
        ]);
        $product->save();

        $product = new \App\product([
            "product_name" => "AZ-Home - Ladekast Milo",
            "product_color" => "Wit",
            "product_materials" => "MDF",
            "product_price" => "150",
            "categories_id" => "5",
        ]);
        $product->save();
    }
}