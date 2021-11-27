<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Address;
use App\Models\Member;
use App\Models\User;

class MemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Member::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $accountNbr =  Str::random(10);
        return [
            'user_id' => User::factory(),
            'address_id' => Address::factory()->state([
                'line2' => $accountNbr
            ]),
            'name' => $this->faker->name,
            'trn' => Str::random(6),
            'phone_nbr' => $this->faker->phoneNumber,
            'pickup_location' => $this->faker->word,
            'account_number' => $accountNbr,
        ];
    }
}
