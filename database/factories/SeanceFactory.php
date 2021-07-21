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
            'user1_id' => 1,
            'user2_id' => 2,
            'blocked' => false,
            'blocked_by' => null,
        ];
    }
}
