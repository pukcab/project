<?php namespace Sierra\Syllabus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSierraSyllabusUnits3 extends Migration
{
    public function up()
    {
        Schema::table('sierra_syllabus_units', function($table)
        {
            $table->text('status')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('sierra_syllabus_units', function($table)
        {
            $table->dropColumn('status');
        });
    }
}
