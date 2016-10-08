<?php namespace Sierra\Syllabus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSierraSyllabusUnits extends Migration
{
    public function up()
    {
        Schema::rename('sierra_syllabus_', 'sierra_syllabus_units');
    }
    
    public function down()
    {
        Schema::rename('sierra_syllabus_units', 'sierra_syllabus_');
    }
}
