<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


       User::create([

            'name' => 'Abraham Guerrero',
            'email' => 'abrahamguerrero@cmsnextech.com',
            'password' => bcrypt('Tribilin@22')

       ])->assignRole('Admin');

       User::create([

        'name' => 'Nicholas Crandall',
        'email' => 'nicholascrandall@cmsnextech.com',
        'password' => bcrypt('nicholascrandall@01')

        ])->assignRole('Editor');

       User::factory(1)->create();
    }
}
