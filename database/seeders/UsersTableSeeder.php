<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*public function run()
    {
        for($i = 0; $i < 3; $i++){
        
            DB::table('users')->insert([

                'user_name' => 'test',
                'email' => 'test',
                'password' => bcrypt('password'),
                
            ]);
        }
    }*/
}
