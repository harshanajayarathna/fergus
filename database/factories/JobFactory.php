<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;
use App\Models\Status;

class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'number' => $this->faker->randomNumber($nbDigits = 6, $strict = true),
            'description' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'client_id' => Client::factory(),
            'status_id' => Status::all()->random(),
            'created_at' => now()
        ];
    }
}
