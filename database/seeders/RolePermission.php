<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermission extends Seeder
{
    /**
     * Menjalankan penanaman data ke database.
     */
    public function run(): void
    {
        Permission::create([
            'name' => 'tips-makanan'
        ]);

        Role::create([ 'name' => 'admin']);
        Role::create([ 'name' => 'user']);

        Role::findByName('admin');

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@polindra.ac.id',
            'email_verified_at' => now(),
            'password' => bcrypt('123456'),
        ]);

        $user = User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456'),
        ]);

        $admin->assignRole('admin');
        $user->assignRole('user');
    }
}
