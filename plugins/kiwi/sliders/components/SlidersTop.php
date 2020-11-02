<?php namespace Kiwi\Sliders\Components;

use Cms\Classes\ComponentBase;
use Kiwi\Sliders\Models\SliderTop;

class SlidersTop extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Slider top',
            'description' => 'Slider v headeri'
        ];
    }

    public function defineProperties(){
        return [
            'sortOrder' => [
                'title' => 'Radenie záznamov',
                'description' => 'Zoradiť záznamy',
                'type' => 'dropdown',
                'default' => 'title asc'
            ],

        ];
    }

    public function getSortOrderOptions(){
        return [
            'name asc' => 'Názov (Vzostupne)',
            'name desc' => 'Názov (Zostupne)'
        ];
    }

    public function onRun(){
        $this->sliderstop = $this->page['sliderstop'] = $this->listSliders();
        //  dd($this->sliderstop);
    }


    protected function listSliders()
    {

        $sliderstop = SliderTop::listFrontEnd([
            'page'             => 1,
            'perPage'          => 10,
        ]);

        return $sliderstop;
    }


    public $sliderstop;

}