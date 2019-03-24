<?php

use App\City;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(City::class)->create(['name' => 'Khartoum']);

        factory(City::class)->create(['name' => 'Bahri']);

        factory(City::class)->create(['name' => 'Omdurman']);
    }
}
