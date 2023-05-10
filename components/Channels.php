<?php namespace Nielsvandendries\Twitchembed\Components;

use Cms\Classes\ComponentBase;
use Nielsvandendries\Twitchembed\Models\Channel;

/**
 * Channels Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Channels extends ComponentBase
{
    public $item;
    public function componentDetails()
    {
        return [
            'name' => 'Twitch Channels',
            'description' => 'Show your live stream on your website'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [
            'name' => [
                'title'             => 'name',
                'description'       => 'of your Channel defined in the Plugin',
                'type'              => 'dropdown',
            ]
        ];
    }

    public function getnameOptions()
    {
        return Channel::get()->lists('name', 'name');
    }

    public function onRun()
    {
        $this->item = Channel::where('name', $this->property('name'))->get()->toArray();
    }
}
