<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array(
            0 =>
            array(
                'id' => 1,
                'role_id' => 1,
                'name' => 'Admin',
                'user_name' => 'admin',
                'email' => 'email@email.com',
                'password' => Hash::make(123456789),
                'avatar' => NULL,
                'remember_token' => 'aCNoA241yNNWR7SREuej9f4lTqxXcdp6SARVT1DtT99bjqR1bubcMt5ROVU6',
                'created_at' => '2024-10-07 21:45:33',
                'updated_at' => '2024-11-17 01:08:28',
            ),
        ));
    }
}
