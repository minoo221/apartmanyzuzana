<?php namespace Kiwi\Sliders;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Kiwi\Sliders\Components\SlidersTop' => 'sliderstop',
        ];
    }

    public function registerSettings()
    {
    }

    public function registerPageSnippets()
    {
        return [
            'Kiwi\Sliders\Components\SlidersTop' => 'Slider v headeri.'
        ];
    }
}
