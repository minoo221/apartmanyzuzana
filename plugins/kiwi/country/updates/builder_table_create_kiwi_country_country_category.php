<?php namespace Kiwi\Country\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKiwiCountryCountryCategory extends Migration
{
    public function up()
    {
        Schema::create('kiwi_country_country_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('country_id');
            $table->integer('category_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kiwi_country_country_category');
    }
}
