<?php namespace Kiwi\Country\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKiwiCountryCountry extends Migration
{
    public function up()
    {
        Schema::create('kiwi_country_country', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('body');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('sort_order');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kiwi_country_country');
    }
}
