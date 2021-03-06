<?php namespace Kiwi\Country\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKiwiCountryCategory3 extends Migration
{
    public function up()
    {
        Schema::table('kiwi_country_category', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('kiwi_country_category', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
