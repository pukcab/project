<?php namespace Sierra\Syllabus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSierraSyllabusUnitSubunits extends Migration
{
    public function up()
    {
        Schema::table('sierra_syllabus_unit_subunits', function($table)
        {
            $table->integer('sub_unit_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('sierra_syllabus_unit_subunits', function($table)
        {
            $table->dropColumn('sub_unit_id');
        });
    }
}
