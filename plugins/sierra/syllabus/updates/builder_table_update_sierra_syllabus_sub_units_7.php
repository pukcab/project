<?php namespace Sierra\Syllabus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSierraSyllabusSubUnits7 extends Migration
{
    public function up()
    {
        Schema::table('sierra_syllabus_sub_units', function($table)
        {
            $table->integer('sub_unit_id')->nullable()->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('sierra_syllabus_sub_units', function($table)
        {
            $table->dropColumn('sub_unit_id');
        });
    }
}
