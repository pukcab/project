<?php namespace Sierra\Syllabus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSierraSyllabusUnits5 extends Migration
{
    public function up()
    {
        Schema::table('sierra_syllabus_units', function($table)
        {
            $table->dropColumn('item_id');
        });
    }
    
    public function down()
    {
        Schema::table('sierra_syllabus_units', function($table)
        {
            $table->integer('item_id')->nullable()->unsigned();
        });
    }
}
