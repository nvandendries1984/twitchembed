<?php namespace NielsVanDenDries\Twitchembed;

// This Plugin is created for OctoberCMS v3 by NvandenDries.nl


use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            '\Nielsvandendries\Twitchembed\Components\Channels' => 'Channels',
            '\Nielsvandendries\Twitchembed\Components\Clips' => 'Clips'
        ];
    }

    public function registerSettings()
    {
    }
}
