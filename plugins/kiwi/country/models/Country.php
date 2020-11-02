<?php namespace Kiwi\Country\Models;

use Model;

/**
 * Model
 */
class Country extends Model
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
        'body',
        'category',
        'images',
        ['slug', 'index' => true]
    ];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'kiwi_country_country';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'images' => 'System\Models\File',
    ];

    public $belongsToMany= [
        'category' => [
            'Kiwi\Country\Models\Category',
            'table' => 'kiwi_country_country_category',
            'order' => 'category_name',
        ],
    ];
}
