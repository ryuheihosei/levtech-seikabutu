<?php

use Illuminate\Database\Seeder;

class GradeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
           'id'=>'1',
           'name'=>'小１',
        ]);
        
        DB::table('grades')->insert([
           'id'=>'2',
           'name'=>'小2',
        ]);
        
        DB::table('grades')->insert([
           'id'=>'3',
           'name'=>'小3',
        ]);
        
        DB::table('grades')->insert([
           'id'=>'4',
           'name'=>'小4',
        ]);
        
        DB::table('grades')->insert([
           'id'=>'5',
           'name'=>'小5',
        ]);
        
        DB::table('grades')->insert([
           'id'=>'6',
           'name'=>'小6',
        ]);
        
        DB::table('grades')->insert([
           'id'=>'7',
           'name'=>'中１',
        ]);
        
        DB::table('grades')->insert([
           'id'=>'8',
           'name'=>'中2',
        ]);
        
        DB::table('grades')->insert([
           'id'=>'9',
           'name'=>'中3',
        ]);
        
        DB::table('grades')->insert([
           'id'=>'10',
           'name'=>'高１',
        ]);
        
        DB::table('grades')->insert([
           'id'=>'11',
           'name'=>'高2',
        ]);
        
        DB::table('grades')->insert([
           'id'=>'12',
           'name'=>'高3',
        ]);
    }
}
