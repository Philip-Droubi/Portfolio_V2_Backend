<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectTechTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('project_tech')->delete();
        
        \DB::table('project_tech')->insert(array (
            0 => 
            array (
                'id' => 1,
                'project_id' => 1,
                'tech_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'project_id' => 1,
                'tech_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'project_id' => 2,
                'tech_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'project_id' => 2,
                'tech_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'project_id' => 2,
                'tech_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'project_id' => 3,
                'tech_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'project_id' => 3,
                'tech_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'project_id' => 3,
                'tech_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'project_id' => 4,
                'tech_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 11,
                'project_id' => 4,
                'tech_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 12,
                'project_id' => 4,
                'tech_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 14,
                'project_id' => 6,
                'tech_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 15,
                'project_id' => 6,
                'tech_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 16,
                'project_id' => 7,
                'tech_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 17,
                'project_id' => 7,
                'tech_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 18,
                'project_id' => 7,
                'tech_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 19,
                'project_id' => 7,
                'tech_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 20,
                'project_id' => 7,
                'tech_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 21,
                'project_id' => 7,
                'tech_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 22,
                'project_id' => 7,
                'tech_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 23,
                'project_id' => 7,
                'tech_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 24,
                'project_id' => 7,
                'tech_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 25,
                'project_id' => 7,
                'tech_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 26,
                'project_id' => 6,
                'tech_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 27,
                'project_id' => 8,
                'tech_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 28,
                'project_id' => 8,
                'tech_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 30,
                'project_id' => 8,
                'tech_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 31,
                'project_id' => 9,
                'tech_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 32,
                'project_id' => 9,
                'tech_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 33,
                'project_id' => 9,
                'tech_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 34,
                'project_id' => 10,
                'tech_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 35,
                'project_id' => 10,
                'tech_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 36,
                'project_id' => 11,
                'tech_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 37,
                'project_id' => 11,
                'tech_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 38,
                'project_id' => 11,
                'tech_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 39,
                'project_id' => 11,
                'tech_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 40,
                'project_id' => 11,
                'tech_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 41,
                'project_id' => 11,
                'tech_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 42,
                'project_id' => 11,
                'tech_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 43,
                'project_id' => 11,
                'tech_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 44,
                'project_id' => 11,
                'tech_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 45,
                'project_id' => 11,
                'tech_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 46,
                'project_id' => 11,
                'tech_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 47,
                'project_id' => 12,
                'tech_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 48,
                'project_id' => 12,
                'tech_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 49,
                'project_id' => 12,
                'tech_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 50,
                'project_id' => 12,
                'tech_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 51,
                'project_id' => 12,
                'tech_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 52,
                'project_id' => 12,
                'tech_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 53,
                'project_id' => 12,
                'tech_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 54,
                'project_id' => 12,
                'tech_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 55,
                'project_id' => 13,
                'tech_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 56,
                'project_id' => 13,
                'tech_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 57,
                'project_id' => 13,
                'tech_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 58,
                'project_id' => 13,
                'tech_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}