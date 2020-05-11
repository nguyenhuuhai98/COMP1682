<?php

use Illuminate\Database\Seeder;

class VoucherSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $vouchers = [
            'DISCOUNT10P' => [
                'description' => 'Discount 10 percents',
                'discount' => '10',
                'unit' => 'percent',
            ],
            'DISCOUNT15P' => [
                'description' => 'Discount 15 percents',
                'discount' => '15',
                'unit' => 'percent',
            ],
            'DISCOUNT20P' => [
                'description' => 'Discount 20 percents',
                'discount' => '20',
                'unit' => 'percent',
            ],
            'DISCOUNT30P' => [
                'description' => 'Discount 30 percents',
                'discount' => '30',
                'unit' => 'percent',
            ],
            'DISCOUNT40P' => [
                'description' => 'Discount 40 percents',
                'discount' => '40',
                'unit' => 'percent',
            ],
            'DISCOUNT100' => [
                'description' => 'Discount 100 dollars',
                'discount' => '100',
                'unit' => 'dollars',
            ],
            'DISCOUNT200' => [
                'description' => 'Discount 200 dollars',
                'discount' => '200',
                'unit' => 'dollars',
            ],
            'DISCOUNT300' => [
                'description' => 'Discount 300 dollars',
                'discount' => '300',
                'unit' => 'dollars',
            ],
            'DISCOUNT500' => [
                'description' => 'Discount 500 dollars',
                'discount' => '500',
                'unit' => 'dollars',
            ],
            'DISCOUNT1000' => [
                'description' => 'Discount 1000 dollars',
                'discount' => '1000',
                'unit' => 'dollars',
            ],
            'DISCOUNT2000' => [
                'description' => 'Discount 2000 dollars',
                'discount' => '2000',
                'unit' => 'dollars',
            ],
        ];
        foreach ($vouchers as $key => $voucher) {
            DB::table('vouchers')->insert([
                'voucher_code' => $key,
                'description' => $voucher['description'],
                'discount' => $voucher['discount'],
                'unit' => $voucher['unit'],
                'end_date' => $faker->dateTimeBetween($startDate = '-1 months', $endDate = '+5 month', $timezone = null),
            ]);
        }
    }
}
