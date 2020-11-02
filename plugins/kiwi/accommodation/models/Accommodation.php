<?php namespace Kiwi\Accommodation\Models;

use Model;

/**
 * Model
 */
class Accommodation extends Model
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
        'thumb',
        ['slug', 'index' => true]
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'kiwi_accommodation_accommodation';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'thumb' => 'System\Models\File',
    ];

    public $attachMany = [
        'gallery' => 'System\Models\File',
    ];
}
