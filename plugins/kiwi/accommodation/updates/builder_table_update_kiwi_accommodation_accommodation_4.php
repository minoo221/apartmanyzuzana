<?php namespace Kiwi\Accommodation\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKiwiAccommodationAccommodation4 extends Migration
{
    public function up()
    {
        Schema::table('kiwi_accommodation_accommodation', function($table)
        {
            $table->text('body')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('kiwi_accommodation_accommodation', function($table)
        {
            $table->string('body', 191)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
