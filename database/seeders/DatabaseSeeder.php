<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(RoleSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(OrderStatusesSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(UserSeeder::class);
    }
}
