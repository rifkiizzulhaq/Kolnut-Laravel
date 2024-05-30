<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@polindra.ac.id',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('123456'),
        ]);
        $user = User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('123456'),
        ]);

        $admin->assignRole('admin');
        $user->assignRole('user');
    }
}
