<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin =User::create([
            'user_id'=>'admin1',
            'name'=>'admin1',
            'email'=>'admin1@gmail.com',
            'password'=>bcrypt('9904045882'),
        ]);
        $user =User::create([
            'user_id'=>'user',
            'name'=>'user',
            'email'=>'user@gmail.com',
            'password'=>bcrypt('9904045882'),
        ]);
    }
}
