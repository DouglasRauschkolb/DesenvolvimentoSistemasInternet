<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tag_id');
            $table->foreignId('post_id');
            $table->timestamps();
            $table->foreign('tag_id')->references('id')->on('tags')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('post_id')->references('id')->on('posts')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tags_posts', function(Blueprint $table) {
            $table->dropForeign('tags_posts_tag_id_foreign');
            $table->dropForeign('tags_posts_post_id_foreign');
        });
        Schema::dropIfExists('tags_posts');
    }
}
