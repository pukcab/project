<?php namespace Sierra\Syllabus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSierraSyllabusSubunitsItems extends Migration
{
    public function up()
    {
        Schema::create('sierra_syllabus_subunits_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('sub_unit_id')->unsigned();
            $table->integer('item_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sierra_syllabus_subunits_items');
    }
}
