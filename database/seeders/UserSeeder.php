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
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'phone'=> '+12345678',
            'address' => 'Jl.Patimura 2',
            'password' => Hash::make('admin')
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'Atasan',
            'email' => 'atasan@atasan.com',
            'phone'=> '+6285722738594',
            'address' => 'Jl. Ahmad Yani No.10',
            'password' => Hash::make('atasane')
        ]);
        $user->assignRole('user');
    }
}
