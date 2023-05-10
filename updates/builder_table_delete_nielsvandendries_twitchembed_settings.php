<?php namespace NielsVanDenDries\Twitchembed\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteNielsvandendriesTwitchembedSettings extends Migration
{
    public function up()
    {
        Schema::dropIfExists('nielsvandendries_twitchembed_settings');
    }
    
    public function down()
    {
        Schema::create('nielsvandendries_twitchembed_settings', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('client_id', 255);
            $table->string('client_secret', 255);
            $table->string('bearer_token', 255);
            $table->string('name', 255);
        });
    }
}
