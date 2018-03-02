<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('candidates')->insert([
            'position' =>"president",
            'student_id' => "13045409" ,
            'name' => "Mituram Ray" ,
            'session' => "2012-13",
            'year' => "4th",
            'photo' => "111111",   //
        ]);

        
        DB::table('voters')->insert([
            'voter_id' =>"12",
            'name' => "Mituram Ray" ,
            'status' =>"yes",
            'session' => "2012-13",
            'year' => "4th",
            'password' => "111111",   //
        ]);
    }
}
