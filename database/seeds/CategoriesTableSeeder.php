<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\category([
            "category_name" => "Tafels"
        ]);
        $category->save();

        $category = new \App\category([
            "category_name" => "Stoelen"
        ]);
        $category->save();

        $category = new \App\category([
            "category_name" => "Banken"
        ]);
        $category->save();

        $category = new \App\category([
            "category_name" => "Bureaus"
        ]);
        $category->save();
        
        $category = new \App\category([
            "category_name" => "Kasten"
        ]);
        $category->save();
    }
}
