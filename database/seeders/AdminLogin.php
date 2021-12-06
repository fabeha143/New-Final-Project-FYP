<?php

namespace Database\Seeders;
namespace App\Models\User;
use Illuminate\Database\Seeder;


class AdminLogin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'doejohn@gmail.com',
            'phone' => '1234567890',
            'department' => 'hr',
            'dob' => '2010-01-03',
        ]);
    }
}
