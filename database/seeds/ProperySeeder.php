<?php

use Illuminate\Database\Seeder;

class ProperySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Property::class, 10000)->create();
    }
}
