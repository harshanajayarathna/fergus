<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'subject' => $this->faker->sentence($nbDigits = 6, $strict = true),
            'description' => $this->faker->paragraph(),
            'job_id' => Job::all()->random(),
            'created_at' => now()
        ];
    }
}
