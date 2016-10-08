<?php namespace Sierra\Syllabus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSierraSyllabusUnits2 extends Migration
{
    public function up()
    {
        Schema::table('sierra_syllabus_units', function($table)
        {
            $table->renameColumn('unit', 'code');
        });
    }
    
    public function down()
    {
        Schema::table('sierra_syllabus_units', function($table)
        {
            $table->renameColumn('code', 'unit');
        });
    }
}
