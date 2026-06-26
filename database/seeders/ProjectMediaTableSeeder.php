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
            4 => 
            array (
                'id' => 5,
                'project_id' => 2,
                'url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782326727/portfolio/v2/projects/2/media/exbnf7db74k7rcqpm8ja.png',
                'public_id' => 'portfolio/v2/projects/2/media/exbnf7db74k7rcqpm8ja',
                'created_at' => '2026-06-24 21:45:30',
                'updated_at' => '2026-06-24 21:45:30',
            ),
            5 => 
            array (
                'id' => 6,
                'project_id' => 2,
                'url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782326751/portfolio/v2/projects/2/media/ym8dzbsbkihbydjszeof.png',
                'public_id' => 'portfolio/v2/projects/2/media/ym8dzbsbkihbydjszeof',
                'created_at' => '2026-06-24 21:45:54',
                'updated_at' => '2026-06-24 21:45:54',
            ),
            6 => 
            array (
                'id' => 7,
                'project_id' => 2,
                'url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782326757/portfolio/v2/projects/2/media/ygm1lsp1cxdn3fckishk.png',
                'public_id' => 'portfolio/v2/projects/2/media/ygm1lsp1cxdn3fckishk',
                'created_at' => '2026-06-24 21:45:59',
                'updated_at' => '2026-06-24 21:45:59',
            ),
            7 => 
            array (
                'id' => 8,
                'project_id' => 3,
                'url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782359229/portfolio/v2/projects/3/media/msrehlbfwuwxtj6k3bws.png',
                'public_id' => 'portfolio/v2/projects/3/media/msrehlbfwuwxtj6k3bws',
                'created_at' => '2026-06-25 06:47:10',
                'updated_at' => '2026-06-25 06:47:10',
            ),
            8 => 
            array (
                'id' => 9,
                'project_id' => 3,
                'url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782359232/portfolio/v2/projects/3/media/qo24kvwmvkzlbypx4tsp.png',
                'public_id' => 'portfolio/v2/projects/3/media/qo24kvwmvkzlbypx4tsp',
                'created_at' => '2026-06-25 06:47:14',
                'updated_at' => '2026-06-25 06:47:14',
            ),
            9 => 
            array (
                'id' => 10,
                'project_id' => 4,
                'url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782409500/portfolio/v2/projects/4/media/qwronscmtk9no0opxe4r.png',
                'public_id' => 'portfolio/v2/projects/4/media/qwronscmtk9no0opxe4r',
                'created_at' => '2026-06-25 20:45:02',
                'updated_at' => '2026-06-25 20:45:02',
            ),
            10 => 
            array (
                'id' => 19,
                'project_id' => 6,
                'url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782411232/portfolio/v2/projects/6/media/ow3nxjvwzjvhnbkax70v.jpg',
                'public_id' => 'portfolio/v2/projects/6/media/ow3nxjvwzjvhnbkax70v',
                'created_at' => '2026-06-25 21:13:54',
                'updated_at' => '2026-06-25 21:13:54',
            ),
            11 => 
            array (
                'id' => 20,
                'project_id' => 6,
                'url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782411237/portfolio/v2/projects/6/media/krimbnuovejwkdn4rwl3.jpg',
                'public_id' => 'portfolio/v2/projects/6/media/krimbnuovejwkdn4rwl3',
                'created_at' => '2026-06-25 21:13:59',
                'updated_at' => '2026-06-25 21:13:59',
            ),
            12 => 
            array (
                'id' => 21,
                'project_id' => 6,
                'url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782411242/portfolio/v2/projects/6/media/gfgu78epvkjk7g50wxko.jpg',
                'public_id' => 'portfolio/v2/projects/6/media/gfgu78epvkjk7g50wxko',
                'created_at' => '2026-06-25 21:14:04',
                'updated_at' => '2026-06-25 21:14:04',
            ),
            13 => 
            array (
                'id' => 22,
                'project_id' => 6,
                'url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782411248/portfolio/v2/projects/6/media/f2kxu6wnlx1nar0s33ya.jpg',
                'public_id' => 'portfolio/v2/projects/6/media/f2kxu6wnlx1nar0s33ya',
                'created_at' => '2026-06-25 21:14:11',
                'updated_at' => '2026-06-25 21:14:11',
            ),
            14 => 
            array (
                'id' => 23,
                'project_id' => 6,
                'url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782411254/portfolio/v2/projects/6/media/shyk0fwckw9ucr14fhcl.jpg',
                'public_id' => 'portfolio/v2/projects/6/media/shyk0fwckw9ucr14fhcl',
                'created_at' => '2026-06-25 21:14:16',
                'updated_at' => '2026-06-25 21:14:16',
            ),
            15 => 
            array (
                'id' => 24,
                'project_id' => 6,
                'url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782411260/portfolio/v2/projects/6/media/vc1y1hxi7xklqepfimnv.jpg',
                'public_id' => 'portfolio/v2/projects/6/media/vc1y1hxi7xklqepfimnv',
                'created_at' => '2026-06-25 21:14:22',
                'updated_at' => '2026-06-25 21:14:22',
            ),
            16 => 
            array (
                'id' => 25,
                'project_id' => 6,
                'url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782411268/portfolio/v2/projects/6/media/tqjukebpfz20vk9qm74d.jpg',
                'public_id' => 'portfolio/v2/projects/6/media/tqjukebpfz20vk9qm74d',
                'created_at' => '2026-06-25 21:14:31',
                'updated_at' => '2026-06-25 21:14:31',
            ),
            17 => 
            array (
                'id' => 34,
                'project_id' => 6,
                'url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782411838/portfolio/v2/projects/6/media/wf4trh3p5i5kquqztuw2.jpg',
                'public_id' => 'portfolio/v2/projects/6/media/wf4trh3p5i5kquqztuw2',
                'created_at' => '2026-06-25 21:24:01',
                'updated_at' => '2026-06-25 21:24:01',
            ),
            18 => 
            array (
                'id' => 35,
                'project_id' => 6,
                'url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782411853/portfolio/v2/projects/6/media/iucln1bxwlfisaqkqvpe.jpg',
                'public_id' => 'portfolio/v2/projects/6/media/iucln1bxwlfisaqkqvpe',
                'created_at' => '2026-06-25 21:24:17',
                'updated_at' => '2026-06-25 21:24:17',
            ),
            19 => 
            array (
                'id' => 36,
                'project_id' => 6,
                'url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782412043/portfolio/v2/projects/6/media/da1d9jq42p4jvdz2fa2v.jpg',
                'public_id' => 'portfolio/v2/projects/6/media/da1d9jq42p4jvdz2fa2v',
                'created_at' => '2026-06-25 21:27:25',
                'updated_at' => '2026-06-25 21:27:25',
            ),
            20 => 
            array (
                'id' => 37,
                'project_id' => 6,
                'url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782412051/portfolio/v2/projects/6/media/lmestvrxamgyjqe4senb.jpg',
                'public_id' => 'portfolio/v2/projects/6/media/lmestvrxamgyjqe4senb',
                'created_at' => '2026-06-25 21:27:34',
                'updated_at' => '2026-06-25 21:27:34',
            ),
            21 => 
            array (
                'id' => 38,
                'project_id' => 6,
                'url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782412110/portfolio/v2/projects/6/media/fuivxzl1iffoeeu8sppg.jpg',
                'public_id' => 'portfolio/v2/projects/6/media/fuivxzl1iffoeeu8sppg',
                'created_at' => '2026-06-25 21:28:34',
                'updated_at' => '2026-06-25 21:28:34',
            ),
            22 => 
            array (
                'id' => 39,
                'project_id' => 6,
                'url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782412123/portfolio/v2/projects/6/media/yxpunj02o3ezyjlke0as.jpg',
                'public_id' => 'portfolio/v2/projects/6/media/yxpunj02o3ezyjlke0as',
                'created_at' => '2026-06-25 21:28:45',
                'updated_at' => '2026-06-25 21:28:45',
            ),
            23 => 
            array (
                'id' => 40,
                'project_id' => 6,
                'url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782412128/portfolio/v2/projects/6/media/o6kvgnzvb4kzgneqe0q1.jpg',
                'public_id' => 'portfolio/v2/projects/6/media/o6kvgnzvb4kzgneqe0q1',
                'created_at' => '2026-06-25 21:28:51',
                'updated_at' => '2026-06-25 21:28:51',
            ),
            24 => 
            array (
                'id' => 43,
                'project_id' => 7,
                'url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782415940/portfolio/v2/projects/7/media/nxaweiaoozfmq32vlskv.png',
                'public_id' => 'portfolio/v2/projects/7/media/nxaweiaoozfmq32vlskv',
                'created_at' => '2026-06-25 22:32:23',
                'updated_at' => '2026-06-25 22:32:23',
            ),
            25 => 
            array (
                'id' => 44,
                'project_id' => 7,
                'url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782415977/portfolio/v2/projects/7/media/r05taetbxxxf3xrmol6u.png',
                'public_id' => 'portfolio/v2/projects/7/media/r05taetbxxxf3xrmol6u',
                'created_at' => '2026-06-25 22:32:59',
                'updated_at' => '2026-06-25 22:32:59',
            ),
            26 => 
            array (
                'id' => 45,
                'project_id' => 7,
                'url' => 'https://res.cloudinary.com/djjulka78/image/upload/v1782415985/portfolio/v2/projects/7/media/tibuiao3x703ewrsele5.png',
                'public_id' => 'portfolio/v2/projects/7/media/tibuiao3x703ewrsele5',
                'created_at' => '2026-06-25 22:33:08',
                'updated_at' => '2026-06-25 22:33:08',
            ),
        ));
        
        
    }
}