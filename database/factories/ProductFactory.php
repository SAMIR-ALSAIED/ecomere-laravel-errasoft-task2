<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'Name'=>fake()->text(20),
            'description'=>fake()->text(150),
            // 'image'=>fake()->imageUrl('https://m.media-amazon.com/images/I/51vTTVOAw9L._AC_UL320_.jpg'),
            'image'=>'https://m.media-amazon.com/images/I/31ZXLg+sbHL.AC_SX250.jpg',
            'price'=>fake()->numberBetween(500,2000),
            'code'=>trim(fake()->unique()->text(16)),
            // 'user_id'=>rand(1,\App\Models\User::count())
            'user_id'=> \App\Models\User::inRandomOrder()->value('id')
            
            
        ];
    }
}
