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
            'category' => 'Normal',
            'toppings' => 'Tomato sauce, mozzarella cheese, fresh basil',
            'price' => 9.99,
            'preparation_time' => 20, // in minutes
        ]);
        Pizza::create([
            'name' => 'Pepperoni',
            'toppings' => 'Tomato sauce, mozzarella cheese, pepperoni slices',
            'price' => 11,
            'category' => 'Normal',
            'preparation_time' => 25,
        ]);
        Pizza::create(
            [
                'name' => 'Veggie Pizza',
                'toppings' => " Mushrooms, Artichoke hearts, Roasted red peppers, Red onion, Black olives",
                'price' => 10,
                'preparation_time' => 12,
                'category' => 'Veggie',
            ]
        );
        Pizza::create(
            [
                "name" => "Calabrese",
                "toppings" => "Tomato, Mozzarella, Spicy Salami, Bell Peppers, Olives",
                "price" => 11.99,
                "preparation_time" => 30,
                "category" => "Normal",
            ]
        );
        Pizza::create(
            [
                "name" => "Portobello",
                "toppings" =>  "Tomato, Mozzarella, Portobello Mushrooms, Fresh Basil, Parmesan",
                "price" => 12.99,
                "preparation_time" => 20,
                "category" => "Normal",
            ]
        );
        Pizza::create(
            [
                "name" => "Portobello Vegan",
                "toppings" =>  "Tomato, Vegan Cheese, Portobello Mushrooms, Fresh Basil, Vegan Parmesan",
                "price" => 13,
                "preparation_time" => 15,
                "category" => "Vegan",
            ]
        );
        Pizza::create(
            [
                "name" => "Artichoke Veggie",
                "toppings" =>  "Artichoke, Mozzarella, Parsley, Garlic, Lemon juice, Olive oil, Chili flakes, Salt & pepper",
                "price" => 13,
                "preparation_time" => 15,
                "category" => "Veggie",
            ]
        );
        Pizza::create(
            [
                "name" => "Zucchini Veggie",
                "toppings" =>  "Olive oil, Zucchini, Mozzarella, Italian herb, Lemon, Parmesan, Salt & pepper",
                "price" => 10,
                "preparation_time" => 18,
                "category" => "Veggie",
            ]
        );
        Pizza::create(
            [
                "name" => "BBQVegan Pizza",
                "toppings" =>  "1/2 head of cauliflower, BBQ-sauce, smoked paprika powder, garlic powder, liquid smoke",
                "price" => 15,
                "preparation_time" => 12,
                "category" => "Vegan",
            ]
        );
    }
}