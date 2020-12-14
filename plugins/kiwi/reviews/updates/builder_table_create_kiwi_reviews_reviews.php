<?php namespace Kiwi\Reviews\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKiwiReviewsReviews extends Migration
{
    public function up()
    {
        Schema::create('kiwi_reviews_reviews', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('body');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kiwi_reviews_reviews');
    }
}
