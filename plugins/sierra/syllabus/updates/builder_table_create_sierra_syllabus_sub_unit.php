<?php namespace Sierra\Syllabus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSierraSyllabusSubUnit extends Migration
{
    public function up()
    {
        Schema::create('sierra_syllabus_sub_unit', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('code')->nullable();
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sierra_syllabus_sub_unit');
    }
}
