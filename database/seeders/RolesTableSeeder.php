<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('roles')->delete();

        DB::table('roles')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'مدير النظام',
                'description' => 'Super Admin In The System.',
                'created_at' => '2025-01-12 10:02:54',
                'updated_at' => '2025-01-12 10:02:54',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'موظف',
                'description' => 'Admin in the system.',
                'created_at' => '2025-01-12 10:03:27',
                'updated_at' => '2025-01-12 10:03:27',
            ),
        ));
    }
}
