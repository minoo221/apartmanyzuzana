<?php namespace Kiwi\Accommodation\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKiwiAccommodationAccommodation2 extends Migration
{
    public function up()
    {
        Schema::table('kiwi_accommodation_accommodation', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('kiwi_accommodation_accommodation', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
