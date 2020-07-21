<?php

use Illuminate\Database\Seeder;
use App\Product;
use Illuminate\Support\Str;
class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

                Product::create([
                    'name' => Str::random(10),
                    'description' => Str::random(80),
                    'category_id' => 3,
                    'harga' => 150000,
                    'stock' => 20,
                ]);
    }
}
