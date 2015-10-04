<?php namespace Individuart\Work;

use Backend;
use System\Classes\PluginBase;

/**
 * Work Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Work',
            'description' => 'individuart.work::lang.plugin.description',
            'author'      => 'Individuart',
            'icon'        => 'icon-desktop'
        ];
    }

    public function registerComponents()
    {
        return [
            'Individuart\Work\Components\Worklist' => 'Worklist'
        ];
    }

    public function registerNavigation()
    {
        return [
            'work' => [
                'label' => 'Work',
                'url'   => Backend::url('individuart/work/works'),
                'icon'  => 'icon-desktop',
                'order' => 500
            ]
        ];
    }

}
