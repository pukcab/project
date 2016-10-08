<?php namespace Sierra\Syllabus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSierraSyllabusSubUnits extends Migration
{
    public function up()
    {
        Schema::rename('sierra_syllabus_sub_unit', 'sierra_syllabus_sub_units');
        Schema::table('sierra_syllabus_sub_units', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::rename('sierra_syllabus_sub_units', 'sierra_syllabus_sub_unit');
        Schema::table('sierra_syllabus_sub_unit', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
