<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'agency' => fake() -> company(),
            'start_station' => fake() -> city(),
            'end_station' => fake() -> city(),
            'start_time' => fake() -> dateTimeBeteewn('now','+3 days'),
            'end_time' => fake() -> dateTimeBeteewn('+4 days','+1 week'),
            'code' => fake() -> numerify('train-#####'),
            'number_carriages' => fake() -> numberBeteewn(5, 20),
        ];
    }
}
