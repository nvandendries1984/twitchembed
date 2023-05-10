<?php namespace NielsVanDenDries\Twitchembed\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesTwitchembedResources extends Migration
{
    public function up()
    {
        Schema::rename('nielsvandendries_twitchembed_settings', 'nielsvandendries_twitchembed_resources');
        Schema::table('nielsvandendries_twitchembed_resources', function($table)
        {
            $table->string('supplier_name', 255);
            $table->string('supplier_url', 255);
            $table->text('supplier_info');
            $table->bigInteger('supplier_files');
            $table->string('supplier_username');
            $table->string('suppier_password')->nullable();
            $table->string('suppier_auth');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->dropColumn('client_id');
            $table->dropColumn('client_secret');
            $table->dropColumn('bearer_token');
            $table->dropColumn('name');
        });
    }
    
    public function down()
    {
        Schema::rename('nielsvandendries_twitchembed_resources', 'nielsvandendries_twitchembed_settings');
        Schema::table('nielsvandendries_twitchembed_settings', function($table)
        {
            $table->dropColumn('supplier_name');
            $table->dropColumn('supplier_url');
            $table->dropColumn('supplier_info');
            $table->dropColumn('supplier_files');
            $table->dropColumn('supplier_username');
            $table->dropColumn('suppier_password');
            $table->dropColumn('suppier_auth');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
            $table->string('client_id', 255);
            $table->string('client_secret', 255);
            $table->string('bearer_token', 255);
            $table->string('name', 255);
        });
    }
}
