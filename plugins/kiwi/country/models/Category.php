<?php namespace Kiwi\Country\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];


    /**
     * @var array Attributes that support translation, if available.
     */
    public $translatable = [
        'category_name',
        'slug',
        ['slug', 'index' => true]
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'kiwi_country_category';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'country' => [
            'Kiwi\Country\Models\Country',
            'table' => 'kiwi_country_country_category',
            'order' => 'name'
        ],
    ];
}
