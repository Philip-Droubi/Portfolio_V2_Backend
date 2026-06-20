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

        \DB::table('teches')->insert(array(
            15 =>
            array(
                'icon' => 'https://res.cloudinary.com/djjulka78/image/upload/v1781725972/portfolio/v2/teches/ari32s0fgm5jgbsovpnw.svg',
                'icon_public_id' => 'portfolio/v2/teches/ari32s0fgm5jgbsovpnw',
                'name' => '{"ar":"PHP","en":"PHP"}',
                'is_active' => 1,
                'created_at' => '2026-06-17 22:52:52',
                'updated_at' => '2026-06-17 22:52:55',
            ),
            0 =>
            array(
                'icon' => 'https://res.cloudinary.com/djjulka78/image/upload/v1781126319/portfolio/v2/teches/yz3uuyf4ve5khzopnhxi.svg',
                'icon_public_id' => 'portfolio/v2/teches/yz3uuyf4ve5khzopnhxi',
                'name' => '{"ar":"Laravel","en":"Laravel"}',
                'is_active' => 1,
                'created_at' => '2026-06-08 01:37:30',
                'updated_at' => '2026-06-11 00:18:41',
            ),
            16 =>
            array(
                'icon' => 'https://res.cloudinary.com/djjulka78/image/upload/v1781726037/portfolio/v2/teches/acwvnqrgo0nqbes0b03i.svg',
                'icon_public_id' => 'portfolio/v2/teches/acwvnqrgo0nqbes0b03i',
                'name' => '{"ar":"MySQL","en":"MySQL"}',
                'is_active' => 1,
                'created_at' => '2026-06-17 22:53:56',
                'updated_at' => '2026-06-17 22:53:59',
            ),
            7 =>
            array(
                'icon' => 'https://res.cloudinary.com/djjulka78/image/upload/v1781126055/portfolio/v2/teches/tktehpkjt9a0bojexkuo.svg',
                'icon_public_id' => 'portfolio/v2/teches/tktehpkjt9a0bojexkuo',
                'name' => '{"ar":"Filament","en":"Filament"}',
                'is_active' => 1,
                'created_at' => '2026-06-08 02:14:26',
                'updated_at' => '2026-06-11 00:14:16',
            ),
            1 =>
            array(
                'icon' => 'https://res.cloudinary.com/djjulka78/image/upload/v1781126294/portfolio/v2/teches/g0o7ycoypjdudyoj4lou.svg',
                'icon_public_id' => 'portfolio/v2/teches/g0o7ycoypjdudyoj4lou',
                'name' => '{"ar":"React JS","en":"React JS"}',
                'is_active' => 1,
                'created_at' => '2026-06-08 01:45:43',
                'updated_at' => '2026-06-11 00:18:15',
            ),
            2 =>
            array(
                'icon' => 'https://res.cloudinary.com/djjulka78/image/upload/v1781126257/portfolio/v2/teches/fmpxdgjclsadfmjmwoim.svg',
                'icon_public_id' => 'portfolio/v2/teches/fmpxdgjclsadfmjmwoim',
                'name' => '{"ar":"Zustand","en":"Zustand"}',
                'is_active' => 1,
                'created_at' => '2026-06-08 01:46:12',
                'updated_at' => '2026-06-11 00:17:39',
            ),
            3 =>
            array(
                'icon' => 'https://res.cloudinary.com/djjulka78/image/upload/v1781126225/portfolio/v2/teches/zscznjqflrp21ekoch4e.svg',
                'icon_public_id' => 'portfolio/v2/teches/zscznjqflrp21ekoch4e',
                'name' => '{"ar":"React Query","en":"React Query"}',
                'is_active' => 1,
                'created_at' => '2026-06-08 01:46:42',
                'updated_at' => '2026-06-11 00:17:07',
            ),
            4 =>
            array(
                'icon' => 'https://res.cloudinary.com/djjulka78/image/upload/v1781126190/portfolio/v2/teches/ecvhfhze7lxlgsoaeisv.svg',
                'icon_public_id' => 'portfolio/v2/teches/ecvhfhze7lxlgsoaeisv',
                'name' => '{"ar":"React Router","en":"React Router"}',
                'is_active' => 1,
                'created_at' => '2026-06-08 01:47:08',
                'updated_at' => '2026-06-11 00:16:32',
            ),
            5 =>
            array(
                'icon' => 'https://res.cloudinary.com/djjulka78/image/upload/v1781126467/portfolio/v2/teches/z8ucvgypm5zwwnd5hib3.svg',
                'icon_public_id' => 'portfolio/v2/teches/z8ucvgypm5zwwnd5hib3',
                'name' => '{"ar":"Material UI","en":"Material UI"}',
                'is_active' => 1,
                'created_at' => '2026-06-08 01:47:28',
                'updated_at' => '2026-06-11 00:21:08',
            ),
            6 =>
            array(
                'icon' => 'https://res.cloudinary.com/djjulka78/image/upload/v1781126130/portfolio/v2/teches/ppy6xofy98ynp9bqab8n.svg',
                'icon_public_id' => 'portfolio/v2/teches/ppy6xofy98ynp9bqab8n',
                'name' => '{"ar":"Axios","en":"Axios"}',
                'is_active' => 1,
                'created_at' => '2026-06-08 01:47:46',
                'updated_at' => '2026-06-11 00:15:32',
            ),
            8 =>
            array(
                'icon' => 'https://res.cloudinary.com/djjulka78/image/upload/v1781126022/portfolio/v2/teches/rkgnze6zpmio4aygw5k3.svg',
                'icon_public_id' => 'portfolio/v2/teches/rkgnze6zpmio4aygw5k3',
                'name' => '{"ar":"HTML","en":"HTML"}',
                'is_active' => 1,
                'created_at' => '2026-06-08 23:51:02',
                'updated_at' => '2026-06-11 00:13:43',
            ),
            9 =>
            array(
                'icon' => 'https://res.cloudinary.com/djjulka78/image/upload/v1781125995/portfolio/v2/teches/qo6vdbizpqf5smfwhp3w.svg',
                'icon_public_id' => 'portfolio/v2/teches/qo6vdbizpqf5smfwhp3w',
                'name' => '{"ar":"CSS","en":"CSS"}',
                'is_active' => 1,
                'created_at' => '2026-06-08 23:51:23',
                'updated_at' => '2026-06-11 00:13:16',
            ),
            10 =>
            array(
                'icon' => 'https://res.cloudinary.com/djjulka78/image/upload/v1781125967/portfolio/v2/teches/marklkliiihrmyj5qtsn.svg',
                'icon_public_id' => 'portfolio/v2/teches/marklkliiihrmyj5qtsn',
                'name' => '{"ar":"JavaScript","en":"JavaScript"}',
                'is_active' => 1,
                'created_at' => '2026-06-08 23:51:59',
                'updated_at' => '2026-06-11 00:12:48',
            ),
            12 =>
            array(
                'icon' => 'https://res.cloudinary.com/djjulka78/image/upload/v1781125850/portfolio/v2/teches/j0925zixhzjpmktuqgmi.svg',
                'icon_public_id' => 'portfolio/v2/teches/j0925zixhzjpmktuqgmi',
                'name' => '{"ar":"TypeScript","en":"TypeScript"}',
                'is_active' => 1,
                'created_at' => '2026-06-10 00:13:19',
                'updated_at' => '2026-06-11 00:10:52',
            ),
            11 =>
            array(
                'icon' => 'https://res.cloudinary.com/djjulka78/image/upload/v1781126436/portfolio/v2/teches/fwolgcvci88mhzr84mtf.svg',
                'icon_public_id' => 'portfolio/v2/teches/fwolgcvci88mhzr84mtf',
                'name' => '{"ar":"Tailwind CSS","en":"Tailwind CSS"}',
                'is_active' => 1,
                'created_at' => '2026-06-08 23:52:29',
                'updated_at' => '2026-06-11 00:20:37',
            ),
            13 =>
            array(
                'icon' => 'https://res.cloudinary.com/djjulka78/image/upload/v1781725859/portfolio/v2/teches/kc8ajos1jcxmq99sui48.svg',
                'icon_public_id' => 'portfolio/v2/teches/kc8ajos1jcxmq99sui48',
                'name' => '{"ar":"Git","en":"Git"}',
                'is_active' => 1,
                'created_at' => '2026-06-17 22:50:48',
                'updated_at' => '2026-06-17 22:51:02',
            ),
            14 =>
            array(
                'icon' => 'https://res.cloudinary.com/djjulka78/image/upload/v1781725926/portfolio/v2/teches/mewsrtxkhfzuoovezwlv.svg',
                'icon_public_id' => 'portfolio/v2/teches/mewsrtxkhfzuoovezwlv',
                'name' => '{"ar":"Postman","en":"Postman"}',
                'is_active' => 1,
                'created_at' => '2026-06-17 22:52:05',
                'updated_at' => '2026-06-17 22:52:09',
            ),
            17 =>
            array(
                'icon' => 'https://res.cloudinary.com/djjulka78/image/upload/v1781726092/portfolio/v2/teches/xnzxgdmncpk5l9suvbsx.svg',
                'icon_public_id' => 'portfolio/v2/teches/xnzxgdmncpk5l9suvbsx',
                'name' => '{"ar":"JIRA","en":"JIRA"}',
                'is_active' => 1,
                'created_at' => '2026-06-17 22:54:51',
                'updated_at' => '2026-06-17 22:54:55',
            ),
        ));
    }
}
