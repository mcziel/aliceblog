<?php namespace AndresLora\AliceBlog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndresloraAliceblogCategories extends Migration
{
    public function up()
    {
        Schema::table('andreslora_aliceblog_categories', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('andreslora_aliceblog_categories', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
}
