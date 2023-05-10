<?php namespace NielsVanDenDries\Twitchembed\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesTwitchembedChannel extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_twitchembed_channel', function($table)
        {
            $table->string('parent')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_twitchembed_channel', function($table)
        {
            $table->dropColumn('parent');
        });
    }
}
