<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Course
 *
 * @property $id_course
 * @property $name
 * @property $description
 * @property $date_start
 * @property $date_end
 * @property $active
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Course extends Model
{
    
    static $rules = [
		'id_course' => 'required',
		'name' => 'required',
		'description' => 'required',
		'date_start' => 'required',
		'date_end' => 'required',
		'active' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_course','name','description','date_start','date_end','active'];



}
