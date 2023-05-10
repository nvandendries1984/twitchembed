<?php namespace NielsVanDenDries\Twitchembed\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesTwitchembedChannel4 extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_twitchembed_channel', function($table)
        {
            $table->string('allowfullscreen');
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_twitchembed_channel', function($table)
        {
            $table->dropColumn('allowfullscreen');
        });
    }
}
