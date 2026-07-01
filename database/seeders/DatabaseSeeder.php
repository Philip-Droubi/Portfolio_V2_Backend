<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(TechesTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(ProjectMediaTableSeeder::class);
        $this->call(ProjectTagTableSeeder::class);
        $this->call(ProjectTechTableSeeder::class);
    }
}
