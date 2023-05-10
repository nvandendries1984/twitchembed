<?php namespace NielsVanDenDries\Twitchembed\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesTwitchembedApisettings extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_twitchembed_apisettings', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('username');
            $table->string('password');
            $table->string('client_id')->nullable();
            $table->string('client_secret')->nullable();
            $table->string('token')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_twitchembed_apisettings');
    }
}
