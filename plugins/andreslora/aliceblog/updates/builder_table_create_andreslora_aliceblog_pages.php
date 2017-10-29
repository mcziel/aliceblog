<?php namespace AndresLora\AliceBlog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndresloraAliceblogPages extends Migration
{
    public function up()
    {
        Schema::create('andreslora_aliceblog_pages', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('title');
            $table->text('title_meta');
            $table->text('description_meta');
            $table->text('title_page');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andreslora_aliceblog_pages');
    }
}
