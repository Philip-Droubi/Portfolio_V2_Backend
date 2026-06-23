<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('tags')->delete();

        \DB::table('tags')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => '{"ar":"Backend","en":"Backend"}',
                'color_hex' => '#fc3e3e',
                'created_at' => '2026-06-08 01:08:46',
                'updated_at' => '2026-06-08 01:08:46',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => '{"ar":"Frontend - Web","en":"Frontend - Web"}',
                'color_hex' => '#3c3eff',
                'created_at' => '2026-06-08 01:10:13',
                'updated_at' => '2026-06-08 01:10:13',
            ),
            2 =>
            array(
                'id' => 3,
                'name' => '{"ar":"Game","en":"Game"}',
                'color_hex' => '#008c0e',
                'created_at' => '2026-06-08 01:10:36',
                'updated_at' => '2026-06-08 01:10:36',
            ),
        ));
    }
}
