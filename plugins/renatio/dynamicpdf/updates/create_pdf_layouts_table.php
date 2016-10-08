<?php

namespace Renatio\DynamicPDF\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

/**
 * Class CreateLayoutsTable
 * @package Renatio\DynamicPDF\Updates
 */
class CreateLayoutsTable extends Migration
{

    /**
     * @return void
     */
    public function up()
    {
        Schema::create('renatio_dynamicpdf_pdf_layouts', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('name');
            $table->text('content_html')->nullable();
            $table->text('content_css')->nullable();
            $table->timestamps();
        });
    }

    /**
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('renatio_dynamicpdf_pdf_layouts');
    }

}