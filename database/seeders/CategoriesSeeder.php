<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name'=> 'Fournitures',
        ]);

        DB::table('categories')-> insert([
            'name'=> 'Appareils Electroniques',
        ]);

        DB::table('categories')-> insert([
            'name'=> 'Objets tranchants',
        ]);

        DB::table('categories')->insert([
            ['name' => 'Technologie'],
            ['name' => 'Santé'],
            ['name' => 'Art'],
            ['name' => 'Science'],
            ['name' => 'Éducation'],
        ]);
    }
}
