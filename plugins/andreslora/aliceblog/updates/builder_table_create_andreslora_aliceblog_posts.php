<?php namespace AndresLora\AliceBlog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndresloraAliceblogPosts extends Migration
{
    public function up()
    {
        Schema::create('andreslora_aliceblog_posts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('title');
            $table->text('description');
            $table->integer('category_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andreslora_aliceblog_posts');
    }
}
