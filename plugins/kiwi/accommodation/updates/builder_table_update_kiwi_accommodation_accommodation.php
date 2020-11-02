<?php namespace Kiwi\Accommodation\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKiwiAccommodationAccommodation extends Migration
{
    public function up()
    {
        Schema::rename('kiwi_accommodation_', 'kiwi_accommodation_accommodation');
    }
    
    public function down()
    {
        Schema::rename('kiwi_accommodation_accommodation', 'kiwi_accommodation_');
    }
}
