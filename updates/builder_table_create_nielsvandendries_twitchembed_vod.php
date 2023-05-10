<?php namespace NielsVanDenDries\Twitchembed\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesTwitchembedVod extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_twitchembed_vod', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('time');
            $table->string('video');
            $table->string('resource_archive');
            $table->smallInteger('height');
            $table->smallInteger('width');
            $table->string('parent');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_twitchembed_vod');
    }
}
