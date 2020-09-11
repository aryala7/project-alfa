<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->foreignId('file_id');
            $table->longText('content');
            $table->foreignId('comment_id');
            $table->timestamps();
        });
        Schema::create('comments',function(Blueprint $table){
            $table->id();
            $table->text('content');
            $table->foreignId('user_id');
            $table->timestamps();
        });
        Schema::create('files',function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('type');
            $table->integer('size');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('files');

    }
}
