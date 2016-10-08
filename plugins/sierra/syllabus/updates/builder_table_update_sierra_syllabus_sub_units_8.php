<?php namespace Sierra\Syllabus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSierraSyllabusSubUnits8 extends Migration
{
    public function up()
    {
        Schema::table('sierra_syllabus_sub_units', function($table)
        {
            $table->dropColumn('test');
            $table->dropColumn('item_id');
            $table->dropColumn('sub_unit_id');
        });
    }
    
    public function down()
    {
        Schema::table('sierra_syllabus_sub_units', function($table)
        {
            $table->text('test')->nullable();
            $table->integer('item_id')->nullable()->unsigned();
            $table->integer('sub_unit_id')->nullable()->unsigned();
        });
    }
}
