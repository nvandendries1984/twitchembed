<?php namespace NielsVanDenDries\Twitchembed\Models;

use Model;

/**
 * Model
 */
class Resources extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    public $attachMany = [
        'resource_files' => \System\Models\File::class
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nielsvandendries_twitchembed_resources';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
