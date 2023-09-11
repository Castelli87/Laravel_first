<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Pizza;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        Pizza::create([
            'name' => 'Margherita',
            'toppings' => 'Tomato sauce, mozzarella cheese, fresh basil',
            'price' => 9.99,
            'preparation_time' => 20, // in minutes
        ]);
        Pizza::create(            [
            'name' => 'Pepperoni',
            'toppings' => 'Tomato sauce, mozzarella cheese, pepperoni slices',
            'price' => 11,
            'preparation_time' => 25,
        ]);
    }
}