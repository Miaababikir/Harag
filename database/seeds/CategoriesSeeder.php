<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Category::class)->create([
            'name' => 'Cars',
            'icon' => 'fa fa-car'
        ]);

        factory(\App\Category::class)->create([
            'name' => 'Sports',
            'icon' => 'fa fa-soccer-ball-o'
        ]);

        factory(\App\Category::class)->create([
            'name' => 'Furniture',
            'icon' => 'fa fa-bed'
        ]);

        factory(\App\Category::class)->create([
            'name' => 'Books',
            'icon' => 'fa fa-book'
        ]);
    }
}
