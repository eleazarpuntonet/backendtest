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
        $this->call(userseed::class);
        $this->call(storeseeder::class);
        $this->call(carseeder::class);
        $this->call(inventario::class);
    }
}
