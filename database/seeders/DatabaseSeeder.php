<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Role;
use Database\Factories\AddressFactory;
use Database\Factories\CourierFactory;
use Database\Factories\MemberFactory;
use Database\Factories\RoleFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        RoleFactory::new()->sequence(
            ['role' => 'Admin'],
            ['role' => 'Member']
        )->count(2)->create();

        UserFactory::new()->has(MemberFactory::new()->has(AddressFactory::new()))->count(20)->create();

        CourierFactory::new()->count(10)->create();
    }
}
