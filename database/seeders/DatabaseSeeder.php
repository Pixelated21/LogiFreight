<?php

namespace Database\Seeders;

use App\Models\roleCtrl;
use App\Models\User;
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
        $this->call([
            RoleSeeder::class,
        ]);

        User::create([
            'email' => 'javaughnbailey21@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'role_id' => 1,
            'status' => 1,
            'created_at' => now('Jamaica'),
            'updated_at' => now('Jamaica'),

        ]);
    }
}
