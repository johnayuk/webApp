<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role'=> 'admin',
            'firstName' => 'admin',
            'lastName'=>'admin',
            'email' => 'test@test.com',
            'city' => 'uyo',
            'salary' => '500,000',
            'company'=>'Bentech',
            'password' => Hash::make('password'),
        ]);
    }

}