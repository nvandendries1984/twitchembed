<?php namespace NielsVanDenDries\Twitchembed\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesTwitchembedVod5 extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_twitchembed_vod', function($table)
        {
            $table->dropColumn('resource_archive');
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_twitchembed_vod', function($table)
        {
            $table->string('resource_archive', 255);
        });
    }
}
