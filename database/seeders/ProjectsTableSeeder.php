<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projects')->delete();
        
        \DB::table('projects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '{"en":"Ant War","ar":"حرب النمل"}',
                'slug' => 'ant-war',
                'tiny_description' => '{"en":"AntsWar Game is a university OpenGL project about a swarm of ants invading your PC. Your mission is to grab your weapon and fight off these chaotic, rowdy ants before they take over your system.","ar":"لعبة AntsWar هي مشروع جامعي باستخدام OpenGL، وتدور حول غزو مجموعة من النمل لجهاز الكمبيوتر الخاص بك. مهمتك هي حمل سلاحك ومحاربة هذا النمل المشاغب قبل أن يسيطر على جهازك."}',
            'description' => '{"en":"<p>This project was completed during the third year of university in the Computer Graphics course.<br>It was developed in C++ using the OpenGL legacy library.</p><br><h2>The project was created by:</h2><ul><li><p>Kawther Khadam AlJammeh</p></li><li><p>Philip Droubi</p></li><li><p>Mohammed Ala&#039;a Al‑Olabi</p></li></ul>","ar":"<p>تم إنجاز هذا المشروع خلال السنة الجامعية الثالثة ضمن مادة الرسوميات الحاسوبية (Computer Graphics).<br>وقد تم تطويره باستخدام لغة ++C ومكتبة OpenGL القديمة.</p><br><h2>تم تنفيذ المشروع بواسطة:</h2><ul><li><p>كوثر خضام الجامع</p></li><li><p>فيليب دروبي</p></li><li><p>محمد علاء العلبي</p></li></ul>"}',
                'main_image' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782178313/portfolio/v2/projects/1/sbytzs54x5ziprqf0icd.jpg',
                'main_image_public_id' => 'portfolio/v2/projects/1/sbytzs54x5ziprqf0icd',
                'start_date' => '2022-11-01',
                'end_date' => '2023-01-01',
                'is_draft' => 0,
                'url' => NULL,
                'live_url' => NULL,
                'created_at' => '2026-06-23 04:31:49',
                'updated_at' => '2026-06-23 04:36:01',
            ),
        ));
        
        
    }
}