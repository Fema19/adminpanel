<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; // ⬅ WAJIB untuk Hash::make()
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name'=>'admin','email'=>'admin@gmail.com','password'=>Hash::make('12345')],
        ];
        DB::table('users')->insert($users);
    }
}
