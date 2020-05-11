<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $shortDescription = '<p><strong>Feature</strong></p><p>Product packaging may vary depending on the Supplier</p><p>Drinking MILO every day helps provide a constant source of energy for the child&#39;s day-to-day activities</p><p>Delicious and nutritious taste with cocoa, milk and barley</p><p><strong>Origin</strong></p><p>Vietnam</p><p><strong>Ingredient</strong></p><p>Derived from barley germ, sugar, milk powder, synthetic vanilla flavor</p>';
        $description = '<p><big><strong>An overview of Milo Active-Go Nestl&eacute; barley nutritious drink 400g.</strong></big></p><p><strong>Milo Active-Go Nestl&eacute; barley nutritious drink 400g bottle</strong> is processed and produced by the <strong>Nestl&eacute;</strong> brand - the world&#39;s largest food and beverage company founded in 1866, Headquartered in Vevey, Switzerland. Nestl&eacute;&#39;s current products range from mineral water, baby food, coffee and dairy products.<br /><strong>Milo Active-Go Nestl&eacute; barley nutritious drink 400g bottle</strong> with superior nutritional extracts from whole wheat germ helps to provide longer-lasting energy for learning , playing sports and physical activities.</p><p>Nutritious drinks with deliciously delicious cocoa milk flavor, not only loved by children but also enjoyed by adults.</p><p><strong>Milo Active-Go Nestl&eacute; barley nutritious drink 400g bottle</strong> suitable for all ages, especially children who are in the period of physical development. Milo supplements calcium, essential nutrients (Vitamin B, Vitamin C, Iron) and a source of energy for active people.</p><p>Products are manufactured on modern technological lines, closed processes so food safety and hygiene, does not affect the health of consumers.</p><p><strong>Instructions on how to brew:</strong></p><p>Hot drink: Add 4 tablespoons of Milo mixed with 80ml of hot water.<br />Cold drink: Add 4 tablespoons of Milo mixed with 35ml of hot water and add ice.<br />Attention should drink immediately after mixing.</p>';
        for ($i = 1; $i <= 500; $i++) {
            $images = [
                'image1' => 'https://comp1682.s3-ap-southeast-1.amazonaws.com/upload/' . rand(1, 41) . '.jpg',
                'image2' => 'https://comp1682.s3-ap-southeast-1.amazonaws.com/upload/' . rand(1, 41) . '.jpg',
            ];
            DB::table('products')->insert([
                'category_id' => rand(28, 134),
                'name' => 'Product' . $i,
                'barcode' => $faker->isbn13,
                'slug' => Str::slug('name' . $i),
                'stock' => 1,
                'price' => rand(0.1, 10),
                'created_at' => Carbon::now(),
                'images' => json_encode($images),
                'status' => 'Active',
                'description' => $description,
                'short_description' => $shortDescription,
                'calculate_unit' => 'Package',
            ]);
        }
    }
}
