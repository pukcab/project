<?php namespace Sierra\Syllabus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSierraSyllabusSubUnits6 extends Migration
{
    public function up()
    {
        Schema::table('sierra_syllabus_sub_units', function($table)
        {
            $table->integer('item_id')->nullable()->unsigned();
            $table->integer('unit_id')->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('sierra_syllabus_sub_units', function($table)
        {
            $table->dropColumn('item_id');
            $table->integer('unit_id')->unsigned(false)->change();
        });
    }
}
