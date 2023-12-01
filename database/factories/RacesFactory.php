<?php

namespace Database\Factories;

use App\Models\Races;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Races>
 */


class RacesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Races::class;

    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word,
            'speed' => $this->faker->numberBetween(20, 40),
            'subrace' => $this->faker->boolean,
            'descripcion' => $this->faker->paragraph,
        ];
    }

    
    
}
