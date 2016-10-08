<?php namespace Sierra\Syllabus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSierraSyllabusUnitSubunits extends Migration
{
    public function up()
    {
        Schema::create('sierra_syllabus_unit_subunits', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('unit_id')->unsigned();
            $table->integer('subunit_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sierra_syllabus_unit_subunits');
    }
}
