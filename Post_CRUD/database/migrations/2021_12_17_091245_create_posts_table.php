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
            $table->string("title")->default("Post Title");
            $table->text("body");
            $table->string("author");
            $table->string("category", 30);
            $table->string("post_format")->default("Standard");
            $table->string("post_status")->default("Active");
            $table->integer("view")->default(0);
            $table->integer("like")->default(0);
            $table->integer("unlike")->default(0);
            $table->integer("share")->default(0);
           // $table->datetime("active")->nullable();
            $table->datetime("published_at" )->nullable();
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
