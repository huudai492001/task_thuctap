<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table("users")->insert([
            'first_name' => 'Hữu',
            'last_name' => 'Đại',
            'email' => 'admin@gmail.com',
            'display' =>'1' ,
            'password' => Hash::make('secret'),
        ]);
    }
}
