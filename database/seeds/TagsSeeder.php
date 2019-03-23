<?php

use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Tag::class)->create([
            'name' => 'Sport'
        ]);

        factory(\App\Tag::class)->create([
            'name' => 'New'
        ]);

        factory(\App\Tag::class)->create([
            'name' => 'Discounts'
        ]);

        factory(\App\Tag::class)->create([
            'name' => 'Electricity'
        ]);
    }
}
