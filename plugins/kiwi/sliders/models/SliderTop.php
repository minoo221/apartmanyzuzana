<?php namespace Kiwi\Sliders\Models;

use Model;

/**
 * Model
 */
class SliderTop extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];


    /**
     * @var array Attributes that support translation, if available.
     */
    public $translatable = [
        'name',
        'image',
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'kiwi_sliders_top';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachMany = [
        'image' => 'System\Models\File',
    ];

    public function scopeListFrontEnd($query, $options)
    {
        /*
         * Default options
         */
        extract(array_merge([
            'page'             => 1,
            'perPage'          => 30,
        ], $options));



        return $query->paginate($perPage, $page);
    }
}
