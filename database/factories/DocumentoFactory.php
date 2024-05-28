<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Inbox;

class InboxFactory extends Factory
{
    protected $inbox = Inbox::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email_receiver' => $this->faker->email(),
            'email_sender' => $this->faker->email(),
        ];
    }
}
