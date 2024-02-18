<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class EvaluationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('evaluations')->insert([
           'stars' => 1,  
       ]);
        
       DB::table('evaluations')->insert([
           'stars' => 2,  
       ]);
        
       DB::table('evaluations')->insert([
           'stars' => 3,  
       ]);
        
       DB::table('evaluations')->insert([
           'stars' => 4,  
       ]);
        
       DB::table('evaluations')->insert([
           'stars' => 5,  
       ]);
    }
}
