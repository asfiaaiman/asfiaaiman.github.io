<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = 'qwerty!123';
        $users = [
            array(
                'first_name' => 'Developer',
                'last_name' => 'Portfolio',
                'phone' => '+923049797496',
                'user_name' => 'aiman.asfia@gmail.com',
                'email' => 'aiman.asfia@gmail.com',
                'address' => 'PAK',
                'city' => 'RWP',
                'postal_code' => '46000',
                'email_verified_at' => now(),
            ),
        ];

        foreach ($users as $user) {
            $user = User::firstOrCreate([
                'user_name' => $user['user_name'],
                'email' => $user['email'],
            ],[
                'first_name' => $user['first_name'],
                'last_name' => $user['last_name'],
                'password' => bcrypt($password),
                'phone' => $user['phone'],
                'address' => $user['address'],
                'city' => $user['city'],
                'postal_code' => $user['postal_code'],
                'email_verified_at' => $user['email_verified_at'],
            ]);
        }
    }
}
