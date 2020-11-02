<?php namespace Kiwi\Sliders\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKiwiSlidersTop extends Migration
{
    public function up()
    {
        Schema::create('kiwi_sliders_top', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kiwi_sliders_top');
    }
}
