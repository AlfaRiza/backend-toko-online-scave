<?php

use Illuminate\Database\Seeder;
use App\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) { 
            Category::create([
                'name'  => Str::random(10),
                'slug'  => Str::random(10),
                'description' => Str::random(80),
            ]);
        }
    }
}
