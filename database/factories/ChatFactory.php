<?php

namespace Database\Factories;

use App\Models\Chat;
use App\Models\User;
use App\Models\Seance;
use App\Models\Message;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Chat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'message_id' => fn () => Message::all()->random(),
            'seance_id' => fn () => Seance::all()->random(),
            'user_id' => fn () => User::all()->random(),
            'read_at' => $this->faker->dateTimeBetween('-10 days', 'now'),
            'type' => $this->faker->boolean ? 1 : 0,
        ];
    }
}
