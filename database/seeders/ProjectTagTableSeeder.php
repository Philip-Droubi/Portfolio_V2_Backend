<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectTagTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('project_tag')->delete();
        
        \DB::table('project_tag')->insert(array (
            0 => 
            array (
                'id' => 1,
                'project_id' => 1,
                'tag_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'project_id' => 2,
                'tag_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'project_id' => 3,
                'tag_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'project_id' => 4,
                'tag_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'project_id' => 3,
                'tag_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'project_id' => 6,
                'tag_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'project_id' => 7,
                'tag_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'project_id' => 7,
                'tag_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'project_id' => 8,
                'tag_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}