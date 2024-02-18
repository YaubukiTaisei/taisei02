<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('occupation');
            $table->string('question');
            $table->text('answer');
            $table->foreignId("user_id")->constrained();
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('evaluation_id')->constrained(); 
            $table->foreignId('selection_type_id')->constrained();
            $table->foreignId('result_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
    
       
    
};
