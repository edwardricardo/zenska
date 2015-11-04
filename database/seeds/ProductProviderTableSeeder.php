<?php

use Illuminate\Database\Seeder;

class ProductProviderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ProductProvider::class, 20)->create();
    }
}
