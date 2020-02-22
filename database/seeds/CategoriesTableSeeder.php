<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories1 = ['Food', 'Home & Life', 'Health & Beauty', 'Mom & Baby', 'Electric Appliances'];
        $categories = [
            '1' => [
                'Drinks',
                'Candy - Snacks',
                'Milk - Cream - Dairy Products',
                'Cooking Oil - Spices - Dry food',
                'Rice - Dry Agricultural Products - Flour',
                'Fruit',
                'Vegetables',
                'Meat & Seafood',
                'Frozen food & Cool Storage',
                'Food Cooked & Preliminary',
                'Bread - Pastries',
            ],
            '2' => [
                'Household Appliances',
                'Paper - Paper Products',
                'Chemical Products - Detergents',
                'Repair & Decorate House',
            ],
            '3' => [
                'Makeup Cosmetics',
                'Personal Care',
                'Perfume - Aromatic Essential Oil',
                'Sexual Support Products',
            ],
            '4' => [
                'Caring for Baby',
                'Caring for Mom',
            ],
            '5' => ['Household Electric Appliances'],
        ];

        foreach ($categories1 as $category) {
            DB::table('categories')->insert([
                'parent_id' => 0,
                'name' => $category,
                'description' => $category,
                'slug' => Str::slug($category),
                'created_at' => Carbon::now(),
            ]);
        }

        foreach ($categories as $key => $category) {
            foreach ($category as $data) {
                DB::table('categories')->insert([
                    'parent_id' => $key,
                    'name' => $data,
                    'description' => $data,
                    'slug' => Str::slug($data),
                    'created_at' => Carbon::now(),
                ]);
            }
        }
    }
}
