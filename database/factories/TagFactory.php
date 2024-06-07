<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TagFactory extends Factory
{
    Protected $model=Tag::class;
//    public function definition()
//    {
//        return [
//            'name' => $this->faker->word(),
//            'slug' => $this->faker->unique()->slug(),
//            'created_at' => now(),
//            'updated_at' => now(),
//        ];
//    }

    public function definition(): array
    {

        return [
            'Name'=>fake()->company(),
            'updated_at' => now(),
            'created_at' => now()
        ];
    }
}
