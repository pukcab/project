<?php namespace Sierra\Syllabus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSierraSyllabusSubunitItems extends Migration
{
    public function up()
    {
        Schema::rename('sierra_syllabus_subunits_items', 'sierra_syllabus_subunit_items');
    }
    
    public function down()
    {
        Schema::rename('sierra_syllabus_subunit_items', 'sierra_syllabus_subunits_items');
    }
}
