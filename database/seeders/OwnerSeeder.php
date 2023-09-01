<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
                'name' => 'test1',
                'email' => 'test1@email.com ',
                'password' => Hash::make('password123'),
                'created_at' => '2021/01/01 11:11:11',
            ],
            [
                'name' => 'test2',
                'email' => 'test2@email.com ',
                'password' => Hash::make('password123'),
                'created_at' => '2021/01/01 11:11:11',
            ],
            [
                'name' => 'test3',
                'email' => 'test3@email.com ',
                'password' => Hash::make('password123'),
                'created_at' => '2021/01/01 11:11:11',
            ],
            [
                'name' => 'test4',
                'email' => 'test4@email.com ',
                'password' => Hash::make('password123'),
                'created_at' => '2021/01/01 11:11:11',
            ],
            [
                'name' => 'test5',
                'email' => 'test5@email.com ',
                'password' => Hash::make('password123'),
                'created_at' => '2021/01/01 11:11:11',
            ],
            [
                'name' => 'test6',
                'email' => 'test6@email.com ',
                'password' => Hash::make('password123'),
                'created_at' => '2021/01/01 11:11:11',
            ],
        ]);
    }
}
