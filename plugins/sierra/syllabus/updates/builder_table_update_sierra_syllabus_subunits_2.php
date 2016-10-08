<?php namespace Sierra\Syllabus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSierraSyllabusSubunits2 extends Migration
{
    public function up()
    {
        Schema::table('sierra_syllabus_subunits', function($table)
        {
            $table->dropColumn('unit_id');
        });
    }
    
    public function down()
    {
        Schema::table('sierra_syllabus_subunits', function($table)
        {
            $table->integer('unit_id')->nullable()->unsigned();
        });
    }
}
