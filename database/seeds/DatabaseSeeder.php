<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GradeTabaleSeeder::class);
        $this->call(SubjectTabaleSeeder::class);
        $this->call(PostsTableSeeder::class);
        
    }
    
}
