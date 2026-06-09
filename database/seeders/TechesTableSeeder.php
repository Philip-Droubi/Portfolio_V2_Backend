<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TechesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('teches')->delete();
        
        \DB::table('teches')->insert(array (
            0 => 
            array (
                'id' => 3,
                'icon' => 'assets/teches/Laravel.svg',
                'name' => '{"ar":"Laravel","en":"Laravel"}',
                'created_at' => '2026-06-08 01:37:30',
                'updated_at' => '2026-06-08 01:37:30',
            ),
            1 => 
            array (
                'id' => 4,
                'icon' => 'assets/teches/React.svg',
                'name' => '{"ar":"React JS","en":"React JS"}',
                'created_at' => '2026-06-08 01:45:43',
                'updated_at' => '2026-06-08 01:50:08',
            ),
            2 => 
            array (
                'id' => 5,
                'icon' => 'assets/teches/zustand-original.svg',
                'name' => '{"ar":"Zustand","en":"Zustand"}',
                'created_at' => '2026-06-08 01:46:12',
                'updated_at' => '2026-06-08 01:46:12',
            ),
            3 => 
            array (
                'id' => 6,
                'icon' => 'assets/teches/react-query.svg',
                'name' => '{"ar":"React Query","en":"React Query"}',
                'created_at' => '2026-06-08 01:46:42',
                'updated_at' => '2026-06-08 01:46:42',
            ),
            4 => 
            array (
                'id' => 7,
                'icon' => 'assets/teches/reactrouter.svg',
                'name' => '{"ar":"React Router","en":"React Router"}',
                'created_at' => '2026-06-08 01:47:08',
                'updated_at' => '2026-06-08 01:47:08',
            ),
            5 => 
            array (
                'id' => 8,
                'icon' => 'assets/teches/Material UI.svg',
                'name' => '{"ar":"Material UI","en":"Material UI"}',
                'created_at' => '2026-06-08 01:47:28',
                'updated_at' => '2026-06-08 01:47:28',
            ),
            6 => 
            array (
                'id' => 9,
                'icon' => 'assets/teches/Axios.svg',
                'name' => '{"ar":"Axios","en":"Axios"}',
                'created_at' => '2026-06-08 01:47:46',
                'updated_at' => '2026-06-08 01:47:46',
            ),
            7 => 
            array (
                'id' => 10,
                'icon' => 'assets/teches/filament.svg',
                'name' => '{"ar":"Filament","en":"Filament"}',
                'created_at' => '2026-06-08 02:14:26',
                'updated_at' => '2026-06-08 02:14:26',
            ),
            8 => 
            array (
                'id' => 11,
                'icon' => 'assets/teches/HTML5.svg',
                'name' => '{"ar":"HTML","en":"HTML"}',
                'created_at' => '2026-06-08 23:51:02',
                'updated_at' => '2026-06-08 23:51:02',
            ),
            9 => 
            array (
                'id' => 12,
                'icon' => 'assets/teches/CSS3.svg',
                'name' => '{"ar":"CSS","en":"CSS"}',
                'created_at' => '2026-06-08 23:51:23',
                'updated_at' => '2026-06-08 23:51:23',
            ),
            10 => 
            array (
                'id' => 13,
                'icon' => 'assets/teches/JavaScript.svg',
                'name' => '{"ar":"JavaScript","en":"JavaScript"}',
                'created_at' => '2026-06-08 23:51:59',
                'updated_at' => '2026-06-08 23:51:59',
            ),
            11 => 
            array (
                'id' => 14,
                'icon' => 'assets/teches/Tailwind CSS.svg',
                'name' => '{"ar":"Tailwind CSS","en":"Tailwind CSS"}',
                'created_at' => '2026-06-08 23:52:29',
                'updated_at' => '2026-06-08 23:52:29',
            ),
        ));
        
        
    }
}