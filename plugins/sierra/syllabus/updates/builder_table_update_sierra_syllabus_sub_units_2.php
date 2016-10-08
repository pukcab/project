<?php namespace Sierra\Syllabus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSierraSyllabusSubUnits2 extends Migration
{
    public function up()
    {
        Schema::table('sierra_syllabus_sub_units', function($table)
        {
            $table->integer('unit_id');
        });
    }
    
    public function down()
    {
        Schema::table('sierra_syllabus_sub_units', function($table)
        {
            $table->dropColumn('unit_id');
        });
    }
}
