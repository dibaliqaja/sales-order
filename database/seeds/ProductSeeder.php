<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                'product_name' => 'Sabun',
                'product_price' => 9000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
    }
}
