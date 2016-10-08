<?php namespace Sierra\Syllabus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSierraSyllabusItems extends Migration
{
    public function up()
    {
        Schema::create('sierra_syllabus_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sierra_syllabus_items');
    }
}
