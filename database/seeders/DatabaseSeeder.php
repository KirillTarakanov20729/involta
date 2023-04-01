<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\AdminUser;
use App\Models\Blog;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(10)->create();
         Blog::factory(12)->create();
        AdminUser::factory(1)->create([
            "name"=>"Admin",
            "email" => "Involta@involta.com",
            "password"=> bcrypt("12345"),
        ]);
    }
}
