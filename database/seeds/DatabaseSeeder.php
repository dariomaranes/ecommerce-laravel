<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\entidadFaker::class, 50)->create();
        //factory(App\Product::class, 250)->create();
    }
}
