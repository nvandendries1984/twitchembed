<?php namespace NielsVanDenDries\Twitchembed\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesTwitchembedResources3 extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_twitchembed_resources', function($table)
        {
            $table->string('resource_archive');
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_twitchembed_resources', function($table)
        {
            $table->dropColumn('resource_archive');
        });
    }
}
