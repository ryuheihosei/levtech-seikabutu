<?php

use Illuminate\Database\Seeder;

class SubjectTabaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
           'id'=>'1',
           'name'=>'国語',
        ]);
        
        DB::table('subjects')->insert([
           'id'=>'2',
           'name'=>'数学',
        ]);
        
        DB::table('subjects')->insert([
           'id'=>'3',
           'name'=>'英語',
        ]);
        
        DB::table('subjects')->insert([
           'id'=>'4',
           'name'=>'理科',
        ]);
        
        DB::table('subjects')->insert([
           'id'=>'5',
           'name'=>'社会',
        ]);
        
        DB::table('subjects')->insert([
           'id'=>'6',
           'name'=>'その他',
        ]);
        
        
    }
}
