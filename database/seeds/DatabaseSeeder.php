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
            'position' =>"CR-host",
            'student_id' => "1304590" ,
            'name' => "Ranim Ray" ,
            'session' => "2012-13",
            'year' => "2nd",
            'photo' => "111111",   //
            'vote' =>0,
        ]);

        
        
    }
}
