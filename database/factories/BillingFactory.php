<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Billing;

class BillingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Billing::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'basic_rate' => $this->faker->randomFloat(0, 0, 9999999999.),
            'handling_fee' => $this->faker->randomFloat(0, 0, 9999999999.),
            'custom_duties' => $this->faker->randomFloat(0, 0, 9999999999.),
        ];
    }
}
