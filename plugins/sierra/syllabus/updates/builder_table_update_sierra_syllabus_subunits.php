<?php namespace Sierra\Syllabus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSierraSyllabusSubunits extends Migration
{
    public function up()
    {
        Schema::rename('sierra_syllabus_sub_units', 'sierra_syllabus_subunits');
    }
    
    public function down()
    {
        Schema::rename('sierra_syllabus_subunits', 'sierra_syllabus_sub_units');
    }
}
