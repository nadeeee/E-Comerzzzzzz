<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'T-Shirt'
        ]);

        DB::table('categories')->insert([
            'name' => 'Jeans'
        ]);

        DB::table('categories')->insert([
            'name' => 'Jacket'
        ]);

        DB::table('categories')->insert([
            'name' => 'Hoodie'
        ]);

        DB::table('categories')->insert([
            'name' => 'Dress'
        ]);
    }
}
