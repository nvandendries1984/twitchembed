<?php namespace NielsVanDenDries\Twitchembed\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesTwitchembedVod extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_twitchembed_vod', function($table)
        {
            $table->string('time');
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_twitchembed_vod', function($table)
        {
            $table->dropColumn('time');
        });
    }
}
