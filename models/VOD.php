<?php namespace NielsVanDenDries\Twitchembed\Models;

use Model;

/**
 * Model
 */
class VOD extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nielsvandendries_twitchembed_vod';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
