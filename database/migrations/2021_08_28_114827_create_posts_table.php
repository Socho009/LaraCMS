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
        $postCategory = config('post.post_category');
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            //date
            $table->dateTime('date', $precision = 0); 
            //title
            $table->string('title', 200);
            //post_description
            $table->string('description',10000);
            //category {News,Sport, Politics}
            $table->enum('post_category', ['News', 'Sport','Politics']);

            //user_id
            $table->foreignUuid('user_id');

            //tansactio_mode


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
