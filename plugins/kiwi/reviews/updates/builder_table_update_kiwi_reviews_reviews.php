<?php namespace Kiwi\Reviews\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKiwiReviewsReviews extends Migration
{
    public function up()
    {
        Schema::table('kiwi_reviews_reviews', function($table)
        {
            $table->integer('sort_order');
        });
    }
    
    public function down()
    {
        Schema::table('kiwi_reviews_reviews', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
