<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // create roles
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);

        $user1 = new User;
        $user1->name = 'Admin';
        $user1->username = 'admin';
        $user1->email = 'admin@gmail.com';
        $user1->password = Hash::make('admin123');
        $user1->email_verified_at = now();
        $user1->save();
        $user1->assignRole('admin');

        $user2 = new User;
        $user2->name = 'user';
        $user2->username = 'user';
        $user2->email = 'user@gmail.com';
        $user2->password = Hash::make('test123');
        $user2->email_verified_at = now();
        $user2->save();
        $user2->assignRole('user');
    }
}
