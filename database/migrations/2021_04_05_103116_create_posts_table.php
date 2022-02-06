<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
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
            $table->integer('user_id');
            $table->integer('category_id')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->string('image') ->nullable();
            $table->longText('description');
            $table->string('featured') ->nullable();
            // $table->string('post_type') ->nullable();
            $table->boolean('status')->default(true);
            $table->boolean('trash')->default(false);
            $table->integer('posted_by');
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
        Schema::dropIfExists('posts');
    }
}
