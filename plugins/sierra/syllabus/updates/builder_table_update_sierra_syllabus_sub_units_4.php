<?php namespace Sierra\Syllabus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSierraSyllabusSubUnits4 extends Migration
{
    public function up()
    {
        Schema::table('sierra_syllabus_sub_units', function($table)
        {
            $table->renameColumn('unit_id', 'item_id');
        });
    }
    
    public function down()
    {
        Schema::table('sierra_syllabus_sub_units', function($table)
        {
            $table->renameColumn('item_id', 'unit_id');
        });
    }
}
