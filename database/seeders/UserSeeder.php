<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = User::updateOrCreate(
            ['email'=>'admin@admin.cl'],
            [
                'name' => 'Admin',
                'password' => Hash::make('12341234'),
            ]
        );
        $user2 = User::updateOrCreate(
            ['email'=>'user@user.cl'],
            [
                'name' => 'User',
                'password' => Hash::make('12341234'),
            ]
        );

        $user1->assignRole('Admin');
        $user2->assignRole('Alumno');

    }
}
