<?php namespace Kiwi\Country\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKiwiCountryCategory extends Migration
{
    public function up()
    {
        Schema::create('kiwi_country_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('category_name');
            $table->integer('sort_order');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kiwi_country_category');
    }
}
