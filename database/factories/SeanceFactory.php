<?php

namespace Database\Factories;

use App\Models\Seance;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SeanceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Seance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user1_id' => rand(1, 5),
            'user2_id' => rand(6, 10),
            'blocked' => fn () => false,
            'blocked_by' => null,
        ];
    }
}
