<?php namespace Sierra\Syllabus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSierraSyllabusItems extends Migration
{
    public function up()
    {
        Schema::table('sierra_syllabus_items', function($table)
        {
            $table->text('reference')->nullable();
            $table->renameColumn('title', 'description');
        });
    }
    
    public function down()
    {
        Schema::table('sierra_syllabus_items', function($table)
        {
            $table->dropColumn('reference');
            $table->renameColumn('description', 'title');
        });
    }
}
