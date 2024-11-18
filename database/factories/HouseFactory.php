<?php

namespace Database\Factories;

use App\Models\Owner;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\House>
 */
class HouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "title"=>fake()->title,
            "description"=>fake()->text(200),
            "image"=>fake()->imageUrl(),
            "price"=>fake()->randomElement(["30000 FCFA","100000 FCFA","25000 FCFA","40000 FCFA"]),
            "nbre_quotient"=>rand(2,5),
            "owner_id"=>Owner::factory(),
        ];
    }
}
