<?php namespace Sierra\Syllabus\Models;

use Model;

/**
 * Model
 */
class Unit extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'sierra_syllabus_units';

    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [
       
        'subunit' =>  [
        'Sierra\Syllabus\Models\Subunit',
        'table' => 'sierra_syllabus_unit_subunits'
        ],
      ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}