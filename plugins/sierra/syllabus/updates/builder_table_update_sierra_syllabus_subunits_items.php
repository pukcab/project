<?php namespace Sierra\Syllabus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSierraSyllabusSubunitsItems extends Migration
{
    public function up()
    {
        Schema::table('sierra_syllabus_subunits_items', function($table)
        {
            $table->renameColumn('sub_unit_id', 'subunit_id');
        });
    }
    
    public function down()
    {
        Schema::table('sierra_syllabus_subunits_items', function($table)
        {
            $table->renameColumn('subunit_id', 'sub_unit_id');
        });
    }
}
