<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i <= 30; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'phone' => $faker->phoneNumber,
                'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'gender' => rand(0, 1),
                'address' => $faker->streetAddress,
                'images' => $faker->imageUrl($width = 640, $height = 480, 'cats'),
                'role_id' => rand(1, 2),
                'code' => $faker->ean13,
                'created_at' => $faker->dateTimeBetween($startDate = '-3 years', $endDate = 'now', $timezone = null),
                'updated_at' => $faker->dateTimeBetween($startDate = '-3 years', $endDate = 'now', $timezone = null),
            ]);
        }

        $roles = [
            'customer',
            'staff',
            'admin',
        ];
        foreach ($roles as $role) {
            DB::table('roles')->insert([
                'name' => $role,
            ]);
        }

        $permissions = [
            ''
        ];
    }
}
