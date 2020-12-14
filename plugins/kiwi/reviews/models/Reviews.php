<?php namespace Kiwi\Reviews\Models;

use Model;

/**
 * Model
 */
class Reviews extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    use \October\Rain\Database\Traits\Sortable;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'kiwi_reviews_reviews';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
