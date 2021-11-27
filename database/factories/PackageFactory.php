<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Courier;
use App\Models\Member;
use App\Models\Package;
use App\Models\PackageType;

class PackageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Package::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'package_type_id' => PackageType::factory(),
            'member_id' => Member::factory(),
            'courier_id' => Courier::factory(),
            'courier_tracking_number' => $this->faker->word,
            'weight' => $this->faker->randomFloat(0, 0, 9999999999.),
            'internal_tracking_nbr' => $this->faker->word,
            'estimated_cost' => $this->faker->randomFloat(0, 0, 9999999999.),
        ];
    }
}
