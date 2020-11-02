<?php namespace Kiwi\Sliders\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKiwiSlidersTop extends Migration
{
    public function up()
    {
        Schema::table('kiwi_sliders_top', function($table)
        {
            $table->smallInteger('sort_order');
        });
    }
    
    public function down()
    {
        Schema::table('kiwi_sliders_top', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
