<?php namespace Simon511000\Travail\Models;

use Model;

/**
 * Model
 */
class Matiere extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'simon511000_travail_matieres';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
