<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fertilizer>
 */
class FertilizerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->name,
            "azot_norm"=>$this->faker->randomFloat(2,5,10),
            "phosphor_norm"=>$this->faker->randomFloat(2,5,10),
            "kali_norm"=>$this->faker->randomFloat(2,5,10),
            "culture_id"=>rand(1,14),
            "rigeon"=>$this->faker->city,
            "price"=>rand(500,125467),
            "description"=>$this->faker->text(20),
            "purpose"=>$this->faker->word,
        ];
    }
}
