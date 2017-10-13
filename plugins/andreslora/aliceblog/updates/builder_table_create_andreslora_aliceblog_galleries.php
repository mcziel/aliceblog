<?php namespace AndresLora\AliceBlog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndresloraAliceblogGalleries extends Migration
{
    public function up()
    {
        Schema::create('andreslora_aliceblog_galleries', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('title');
            $table->text('subtitle');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andreslora_aliceblog_galleries');
    }
}
