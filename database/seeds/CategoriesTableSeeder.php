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
        $categories = ['Food', 'Home & Life', 'Health & Beauty', 'Mom & Baby', 'Electric Appliances'];
        $categoriesF1 = [
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
            '5' => ['Electric Appliances'],
            '6' => [
                'Beer',
                'Instant Powdered Nutritional Drink',
                'The Coffee',
                'Fruit Juice',
                'Mineral Water',
                'Soda',
                'Siro',
                'Healthy Drink',
                'Tea',
            ],
            '7' => [
                'Cake',
                'Nuts and Dried Fruits',
                'Candy & Chocolate',
                'Seasonal',
                'Snack',
            ],
            '8' => [
                'Butter - Magarine',
                'Cream',
                'Fresh Milk Cream',
                'Cheese',
                'Yogurt',
                'Condensed Milk - Powdered Milk',
                'Milk',
            ],
            '9' => [
                'Cooking Oil',
                'Street',
                'Spice',
                'Rice Paper - Dry Food',
                'Canned Food - Jars',
                'Instant Food',
                'Vegetarian Food',
                'Other Processed Dried Foods',
            ],
            '10' => [
                'Types of Flour',
                'Rice',
                'Dried Agricultural Products',
            ],
            '11' => [
                'Domestic fruit',
                'Imported fruits',
            ],
            '12' => [
                'Bamboo Shoots',
                'Mushroom',
                'Root Vegetables',
                'Leaf Vegetables',
                'Fruit Vegetables',
                'Spice Vegetables',
                'Sprouts',
            ],
            '13' => [
                'Meat',
                'Seafood',
                'Egg',
            ],
            '14' => [
                'Dumplings',
                'Tofu',
                'Sour Goods Packaged',
                'Frozen Meat',
                'Ham',
                'Frozen Processed Foods',
                'Frozen Seafood Packaging',
                'Frozen Fruits and Vegetables',
                'Sausage',
            ],
            '15' => [
                'Traditional Cake',
                'Cooked Foods',
                'Preliminary Foods',
            ],
            '16' => [
                'Cream cake',
                'Bread',
                'Pastries - salty',
            ],
            '17' => [
                'Bedroom Utensils',
                'Kitchen Utensils',
                'Carpet',
                'Dining Table Utensils',
                'Travel Utensils',
                'Laundry-Hygiene Items',
                'Cups and Drink Utensils',
            ],
            '18' => [
                'Napkins - Toilet Paper',
            ],
            '19' => [
                'House Cleaning',
                'Detergents',
            ],
            '20' => [
                'Other Household Items',
                'Garden Supplies',
                'Worship Things',
                'Repair Tools',
                'Electrical Appliances In The House',
            ],
            '21' => [
                'Makeup Remover',
                'Synthetic Cosmetic Set',
                'Nail Care Tools',
                'Makeup Tools',
                'Eye Makeup Cosmetics',
                'Facial Makeup Cosmetics',
                'Lip Makeup Cosmetics',
                'Nail Polish - Nail Remover',
            ],
            '22' => [
                'Other personal care',
                'Facial skin care',
                'Personal care for men',
                'Personal care for the elderly',
                'Take care of women',
                'Teeth care',
                'Hair care',
                'Body care',
                'Shower',
            ],
            '23' => [
                'Perfume',
                'Essential oil',
            ],
            '24' => [
                'Sexual support products',
            ],
            '25' => [
                'Baby food and drink',
                'Baby skin care',
                'Newborn clothes',
                'Milk & Powder for babies',
                'Diapers for children',
                'Hygiene for babies',
            ],
            '26' => [
                'Caring for Mom',
                'Milk powder for adults',
            ],
            '27' => [
                'Fan',
                'Laundry equipment',
                'Filtration equipment',
                'Kitchen appliances',
                'Bathroom equipment',
            ],
        ];
        $images = ['logo' => 'null', 'image'=>'null'];
        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'parent_id' => 0,
                'name' => str_replace(['Of', 'For', 'And'], ['of', 'for', 'and'], ucwords($category)),
                'description' => $category,
                'slug' => Str::slug($category),
                'images' => json_encode($images),
                'created_at' => Carbon::now(),
            ]);
        }

        foreach ($categoriesF1 as $key => $category) {
            foreach ($category as $data) {
                DB::table('categories')->insert([
                    'parent_id' => $key,
                    'name' => str_replace(['Of', 'For'], ['of', 'for'], ucwords($data)),
                    'description' => $data,
                    'slug' => Str::slug($data),
                    'images' => json_encode($images),
                    'created_at' => Carbon::now(),
                ]);
            }
        }
    }
}
