<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([

            'name' => 'admin',
            'email' => 'admin@event.test',
            'password' => bcrypt('admin123'),
            'phone' => '082390460261',
            'job' => 'raikage',
            'instance' => 'negeri kayangan',
            'role' => '3'
        ]);

        $admin->assignRole('admin');
    }
}
