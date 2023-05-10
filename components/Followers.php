<?php namespace Nielsvandendries\Twitchembed\Components;

use Cms\Classes\ComponentBase;

/**
 * Followers Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Followers extends ComponentBase
{
    public $clientId;
    public $authBearer;
    public $broadcasterId;
    public $followercount;
    public function componentDetails()
    {
        return [
            'name' => 'followers',
            'description' => 'Shows followers'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [
            'clientId' => [
                'title'             => 'Twitch API Client ID',
                'description'       => 'Yout Twitch API Client ID',
                'type'              => 'string',
            ],
            'authBearer' => [
                'title'             => 'Bearer Token',
                'description'       => 'Your Twitch Bearer Token',
                'type'              => 'string',
            ],
            'broadcasterId' => [
                'title'             => 'Broadcaster ID',
                'description'       => 'Your Twitch broadcast ID',
                'type'              => 'string',
            ]
        ];
    }

    public function getclientIdOptions()
    {
        return Vod::get()->lists('clientId', 'clientId');
    }  
    public function getauthBearerOptions()
    {
        return Vod::get()->lists('authBearer', 'authBearer');
    }
    public function getbroadcasterIdOptions()
    {
        return Vod::get()->lists('broadcasterId', 'broadcasterId');
    }

    public function onRun()
    {
        // run command connect to API twitch with given in backend
    }
}
