<?php namespace NielsVanDenDries\Twitchembed\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesTwitchembedResources2 extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_twitchembed_resources', function($table)
        {
            $table->bigInteger('supplier_files')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_twitchembed_resources', function($table)
        {
            $table->bigInteger('supplier_files')->nullable(false)->change();
        });
    }
}
