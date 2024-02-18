<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'company_name' => '企業名',
            'occupation' => '職種',
            'question' => '質問',
            'answer' => '回答',
            'user_id'=> 1,
            'evaluation_id' => 1,
            'selection_type_id' => 1,
            'result_id' => 1,
        ]);
    }
}
