<?php namespace Sierra\Syllabus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSierraSyllabus extends Migration
{
    public function up()
    {
        Schema::table('sierra_syllabus_', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('sierra_syllabus_', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
