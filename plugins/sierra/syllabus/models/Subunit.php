<?php namespace Sierra\Syllabus\Models;

use Model;

/**
 * Model
 */
class Subunit extends Model
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
    public $table = 'sierra_syllabus_subunits';

/**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [
        'item' =>  [
        'Sierra\Syllabus\Models\Item',
        'table' => 'sierra_syllabus_subunit_items'
        ],

    ];
  
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
    

}