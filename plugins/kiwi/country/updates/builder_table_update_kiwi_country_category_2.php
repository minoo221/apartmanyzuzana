<?php namespace Kiwi\Country\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKiwiCountryCategory2 extends Migration
{
    public function up()
    {
        Schema::table('kiwi_country_category', function($table)
        {
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('kiwi_country_category', function($table)
        {
            $table->dropColumn('deleted_at');
        });
    }
}
