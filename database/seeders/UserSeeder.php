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
                'email' => 'aiman.asfia@gmail.com',
                'dob' => '12-03-1995',
                'experience' => '12',
                'job' => 'Software Engineer',
                'country' => 'PAK',
                'state' => 'RWP',
                'city' => 'abc',
                'availability' => '1',
                'job_description' => 'jdghjf',
                'about' => 'fhugfkh',
                'email_verified_at' => now(),
            ),
        ];

        foreach ($users as $user) {
            $user = User::firstOrCreate([
                'email' => $user['email'],
            ],[
                'first_name' => $user['first_name'],
                'last_name' => $user['last_name'],
                'password' => bcrypt($password),
                'phone' => $user['phone'],
                'dob' => $user['dob'],
                'experience' => $user['experience'],
                'job' => $user['job'],
                'country' => $user['country'],
                'state' => $user['state'],
                'city' => $user['city'],
                'availability' => $user['availability'],
                'job_description' => $user['job_description'],
                'about' => $user['about'],
                'email_verified_at' => $user['email_verified_at'],
            ]);
        }
    }
}
