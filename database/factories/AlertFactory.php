<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Alert;
use App\Models\Courier;
use App\Models\Member;

class AlertFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Alert::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'member_id' => Member::factory(),
            'courier_id' => Courier::factory(),
            'tracking_nbr' => $this->faker->word,
            'package_value' => $this->faker->numberBetween(-10000, 10000),
            'desc' => $this->faker->text,
            'status' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
