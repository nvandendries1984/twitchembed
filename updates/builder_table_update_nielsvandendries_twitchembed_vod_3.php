<?php namespace NielsVanDenDries\Twitchembed\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesTwitchembedVod3 extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_twitchembed_vod', function($table)
        {
            $table->dropColumn('time');
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_twitchembed_vod', function($table)
        {
            $table->string('time', 255);
        });
    }
}
