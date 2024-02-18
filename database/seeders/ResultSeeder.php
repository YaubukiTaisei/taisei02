<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('results')->insert([
           'process' => '一次選考通過',  
        ]);
         
        DB::table('results')->insert([
           'process' => '二次選考通過',
        ]);
        
        DB::table('results')->insert([
           'process' => '三次選考通過', 
        ]);
           
        DB::table('results')->insert([
           'process' => '最終選考', 
        ]);
        
        DB::table('results')->insert([
           'process' => '内定', 
        ]);
        
        DB::table('results')->insert([
           'process' => '内定辞退', 
        ]);
    }
}
