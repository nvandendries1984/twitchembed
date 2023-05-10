<?php namespace NielsVanDenDries\Twitchembed\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesTwitchembedResources extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_twitchembed_resources', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('supplier_name');
            $table->string('supplier_url');
            $table->text('supplier_info');
            $table->string('supplier_username');
            $table->string('supplier_password')->nullable();
            $table->string('supplier_auth');
            $table->string('resource_archive');
            $table->bigInteger('supplier_files')->nullable()->change();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_twitchembed_resources');
    }
}
