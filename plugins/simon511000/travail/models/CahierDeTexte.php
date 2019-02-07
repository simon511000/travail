<?php namespace Simon511000\Travail\Models;

use Model;

/**
 * Model
 */
class CahierDeTexte extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'simon511000_travail_cahier_de_texte';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /* Relations */
    public $belongsTo = [
      'matiere' => [
        'Simon511000\Travail\Models\Matiere',
        'order' => 'matiere_name'
      ],
      'user' => [
        'Rainlab\User\Models\User',
        'order' => 'name'
      ]
    ];
}
