<?php namespace AndresLora\AliceBlog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndresloraAliceblogCategories extends Migration
{
    public function up()
    {
        Schema::create('andreslora_aliceblog_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->text('name');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andreslora_aliceblog_categories');
    }
}
