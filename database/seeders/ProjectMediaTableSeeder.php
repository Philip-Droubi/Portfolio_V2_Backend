<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectMediaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('project_media')->delete();
        
        \DB::table('project_media')->insert(array (
            0 => 
            array (
                'id' => 1,
                'project_id' => 1,
                'url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782178320/portfolio/v2/projects/1/media/ykdsamdfzdbleyygjqmv.jpg',
                'public_id' => 'portfolio/v2/projects/1/media/ykdsamdfzdbleyygjqmv',
                'created_at' => '2026-06-23 04:32:04',
                'updated_at' => '2026-06-23 04:32:04',
            ),
            1 => 
            array (
                'id' => 2,
                'project_id' => 1,
                'url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782178329/portfolio/v2/projects/1/media/rqviyosxnfdqpw1vmxwl.jpg',
                'public_id' => 'portfolio/v2/projects/1/media/rqviyosxnfdqpw1vmxwl',
                'created_at' => '2026-06-23 04:32:13',
                'updated_at' => '2026-06-23 04:32:13',
            ),
            2 => 
            array (
                'id' => 3,
                'project_id' => 1,
                'url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782178339/portfolio/v2/projects/1/media/ng6xkz5vbkw4jxfzsmii.jpg',
                'public_id' => 'portfolio/v2/projects/1/media/ng6xkz5vbkw4jxfzsmii',
                'created_at' => '2026-06-23 04:32:23',
                'updated_at' => '2026-06-23 04:32:23',
            ),
            3 => 
            array (
                'id' => 4,
                'project_id' => 1,
                'url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782178349/portfolio/v2/projects/1/media/g5sph4c7ailu46lkkiip.jpg',
                'public_id' => 'portfolio/v2/projects/1/media/g5sph4c7ailu46lkkiip',
                'created_at' => '2026-06-23 04:32:32',
                'updated_at' => '2026-06-23 04:32:32',
            ),
        ));
        
        
    }
}