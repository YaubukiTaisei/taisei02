<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class Selection_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('selection_types')->insert([
           'type' => '一次選考', 
         ]);
         
         DB::table('selection_types')->insert([
           'type' => '二次選考',
        ]);
        
        DB::table('selection_types')->insert([
           'type' => '三次選考', 
        ]);
           
        DB::table('selection_types')->insert([
           'type' => '最終選考', 
        ]);
    }
}
