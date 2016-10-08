<?php namespace Sierra\Syllabus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSierraSyllabusSubUnits3 extends Migration
{
    public function up()
    {
        Schema::table('sierra_syllabus_sub_units', function($table)
        {
            $table->text('test')->nullable();
            $table->integer('unit_id')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('sierra_syllabus_sub_units', function($table)
        {
            $table->dropColumn('test');
            $table->integer('unit_id')->nullable(false)->change();
        });
    }
}
